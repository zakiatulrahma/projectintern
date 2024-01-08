<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\AttendanceHistory;
use App\Models\TimeOff;
use Ramsey\Uuid\Type\Time;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function attendance($date = null)
    {
        //total employee dashboard attendance
        $total_employee = Employee::count();

        //total employee ontime dashboard attendance
        $latestAttendance = AttendanceHistory::latest()->first();
        if ($date == null) {
            $datenewdata = date('Y-m-d', strtotime($latestAttendance->date));
        } else {
            $datenewdata = $date;
        }

        $times = AttendanceHistory::where('status', 1)->whereDate('date', $datenewdata)->pluck('time');

        $convertedTimes = [];
        foreach ($times as $time) {
            $carbonTime = Carbon::parse($time);
            $convertedTime = $carbonTime->format('H:i:s');
            $convertedTimes[] = $convertedTime;
        }

        $lowerBound = "08:00:00";
        $upperBound = "09:15:00";

        $totalOnTime = count(array_filter($convertedTimes, function ($value) use ($lowerBound, $upperBound) {
            return ($value >= $lowerBound && $value <= $upperBound);
        }));

        $now = Carbon::now();
        $date_now = $now->toDateString();
        $attendance = AttendanceHistory::where('status', 1)
            ->whereDate('date', $datenewdata)
            ->get();

        //total employee late in dashboard attendance
        $lateInAttendances = AttendanceHistory::where('status', 1)->whereDate('date', $datenewdata)->pluck('time');

        $convertedTimes = [];
        foreach ($lateInAttendances as $time) {
            $carbonTime = Carbon::parse($time);
            $convertedTime = $carbonTime->format('H:i:s');
            $convertedTimes[] = $convertedTime;
        }

        $upperBound = "09:15:00";

        $lateInAttendances = count(array_filter($convertedTimes, function ($value) use ($upperBound) {
            return ($value >= $upperBound);
        }));

        $attendanceRecord = Attendance::groupBy('date')->selectRaw("date, sum(case when time_off_id is not null then 1 else 0 end) as time_off,
        sum(case when checkin >= '08:00:00' and checkin <= '09:15:00' and time_off_id is null then 1 else 0 end ) as on_time,
        sum(case when checkin > '09:15:00' and time_off_id is null then 1 else 0 end ) as late_in,
        sum(case when checkin is null and checkout is not null and time_off_id is null then 1 else 0 end ) as check_out,
        ((select count(*) from employees) - count(employee_id)) as absen")->get();

        $attendanceCheckIn = [];
        $attendanceLateIn = [];
        $attendanceAbsent = [];
        $attendanceNocheckIn = [];
        $attendanceTimeOff = [];
        $attendanceDate = [];
        foreach ($attendanceRecord as $Record) {
            $carbonTime = Carbon::parse($Record->date);
            $convertedTime = $carbonTime->format('Y-m-d');
            array_push($attendanceDate, $convertedTime);
            array_push($attendanceCheckIn, $Record->on_time);
            array_push($attendanceLateIn, $Record->late_in);
            array_push($attendanceAbsent, $Record->absen);
            array_push($attendanceNocheckIn, $Record->check_out);
            array_push($attendanceTimeOff, $Record->time_off);
        }
        // dd($attendanceRecord);

        //total employee no checkin by dashboard attendances
        $nocheckin = Attendance::whereNotNull('checkout')
            ->whereNull('checkin')->whereDate('date', $datenewdata)
            ->count();

        //total employee absence by dashboard attendance
        $absenceCount = AttendanceHistory::where('status', 0)
            ->whereDate('date', $datenewdata)
            ->count();

        //time off employee by dashboard attendance
        $timeoff = Attendance::whereNotNull('time_off_id')
            ->whereDate('date', $datenewdata)->count();

        //attendance by gender by dashboard attendance
        $attendance_pria = AttendanceHistory::where('status', 1)
            ->whereDate('date', $datenewdata)
            ->whereHas('employee', function ($query) {
                $query->where('gender', 'L');
            })
            ->get();

        $attendance_wanita = AttendanceHistory::where('status', 1)
            ->whereDate('date', $datenewdata)
            ->whereHas('employee', function ($query) {
                $query->where('gender', 'P');
            })
            ->get();

        $count_attendance_pria = $attendance_pria->count();
        $count_attendance_wanita = $attendance_wanita->count();
        $attendance_count = $attendance->count();
        if ($attendance_count === 0) {
            $percent_pria = 0;
            $percent_wanita = 0;
        } else {
            $percent_pria = round(($count_attendance_pria / $attendance_count) * 100);
            $percent_wanita = round(($count_attendance_wanita / $attendance_count) * 100);
        }

        $attendance_absen = AttendanceHistory::where('status', 0)
            ->whereDate('date', $datenewdata)
            ->get();

        //absence by gender dashboard attendance
        $absence_pria = AttendanceHistory::where('status', 0)
            ->whereDate('date', $datenewdata)
            ->whereHas('employee', function ($query) {
                $query->where('gender', 'L');
            })
            ->get();
        $absence_wanita = AttendanceHistory::where('status', 0)
            ->whereDate('date', $datenewdata)
            ->whereHas('employee', function ($query) {
                $query->where('gender', 'P');
            })
            ->get();
        $count_absence_pria = $absence_pria->count();
        $count_absence_wanita = $absence_wanita->count();
        $absence_count = $attendance_absen->count();
        if ($absence_count === 0) {
            $percent_absencepria = 0;
            $percent_absencewanita = 0;
        } else {
            $percent_absencepria = round(($count_absence_pria / $absence_count) * 100);
            $percent_absencewanita = round(($count_absence_wanita / $absence_count) * 100);
        }

        //attendance by directorate dashboard attendance
        $directorat_it_attend = AttendanceHistory::join('employees', 'attendance_histories.employee_id', 'employees.id')
            ->join('directorates', 'employees.directorate_id', 'directorates.id')
            ->where('attendance_histories.status', 1)
            ->whereDate('attendance_histories.date', $datenewdata)
            ->where('directorates.id', '1')->groupBy(['attendance_histories.employee_id', 'attendance_histories.date'])->select('attendance_histories.employee_id')->get();

        $directorat_finance_attend = AttendanceHistory::join('employees', 'attendance_histories.employee_id', 'employees.id')
            ->join('directorates', 'employees.directorate_id', 'directorates.id')
            ->where('attendance_histories.status', 1)
            ->whereDate('attendance_histories.date', $datenewdata)
            ->where('directorates.id', '2')->groupBy(['attendance_histories.employee_id', 'attendance_histories.date'])->select('attendance_histories.employee_id')->get();

        // DB::enableQueryLog();
        $directorat_marketing_attend = AttendanceHistory::join('employees', 'attendance_histories.employee_id', 'employees.id')
            ->join('directorates', 'employees.directorate_id', 'directorates.id')
            ->where('attendance_histories.status', 1)
            ->whereDate('attendance_histories.date', $datenewdata)
            ->where('directorates.id', '3')->groupBy(['attendance_histories.employee_id', 'attendance_histories.date'])->select('attendance_histories.employee_id')->get();
        // dd(DB::getQueryLog());

        //attendance by division dashboard attendance
        $division_sa_attend = AttendanceHistory::join('employees', 'attendance_histories.employee_id', 'employees.id')
            ->join('divisions', 'employees.division_id', 'divisions.id')
            ->where('attendance_histories.status', 1)
            ->whereDate('attendance_histories.date', $datenewdata)
            ->where('divisions.id', '1')->groupBy(['attendance_histories.employee_id', 'attendance_histories.date'])->select('attendance_histories.employee_id')->get();

        $division_dpi_attend = AttendanceHistory::join('employees', 'attendance_histories.employee_id', 'employees.id')
            ->join('divisions', 'employees.division_id', 'divisions.id')
            ->where('attendance_histories.status', 1)
            ->whereDate('attendance_histories.date', $datenewdata)
            ->where('divisions.id', '2')->groupBy(['attendance_histories.employee_id', 'attendance_histories.date'])->select('attendance_histories.employee_id')->get();

        $division_operation_attend = AttendanceHistory::join('employees', 'attendance_histories.employee_id', 'employees.id')
            ->join('divisions', 'employees.division_id', 'divisions.id')
            ->where('attendance_histories.status', 1)
            ->whereDate('attendance_histories.date', $datenewdata)
            ->where('divisions.id', '3')->groupBy(['attendance_histories.employee_id', 'attendance_histories.date'])->select('attendance_histories.employee_id')->get();


        return view('attendance', [
            'total_employees' => $total_employee,
            'on_time' => $totalOnTime,
            'nocheckin' => $nocheckin,
            'absenceCount' => $total_employee - $totalOnTime - $nocheckin - $lateInAttendances - $timeoff,
            'lateInAttendances' => $lateInAttendances,
            'timeoff' => $timeoff,
            'attendance_absen' => $attendance_absen,
            'attendance_pria' => $count_attendance_pria,
            'attendance_wanita' => $count_attendance_wanita,
            'percent_wanita' => $percent_wanita,
            'percent_pria' => $percent_pria,
            'absence_pria' => $count_absence_pria,
            'absence_wanita' => $count_absence_wanita,
            'percent_absencewanita' => $percent_absencewanita,
            'percent_absencepria' => $percent_absencepria,
            'directorat_it_attend' => $directorat_it_attend->count(),
            'directorat_finance_attend' => $directorat_finance_attend->count(),
            'directorat_marketing_attend' => $directorat_marketing_attend->count(),
            'division_sa_attend' => $division_sa_attend->count(),
            'division_dpi_attend' => $division_dpi_attend->count(),
            'division_operation_attend' => $division_operation_attend->count(),
            'attendanceCheckIn' => $attendanceCheckIn,
            'attendanceLateIn' => $attendanceLateIn,
            'attendanceAbsent' => $attendanceAbsent,
            'attendanceNocheckIn' => $attendanceNocheckIn,
            'attendanceTimeOff' => $attendanceTimeOff,
            'attendanceDate' => $attendanceDate,
            'datenewdata' => $datenewdata,
        ]);
    }

    // public function chartData(){
    //     $data=Employee::orderBy('tanggal')->get();
    //     return response()->json($data);
    // }


    public function dashboard($date = null)
    {
        $latestAttendance2 = AttendanceHistory::latest()->first();

        if ($date == null) {
            $datenewdata2 = ($date === null) ? date('Y-m', strtotime($latestAttendance2->date)) : $date;
            $total_employee = Employee::count();
            //employee by status dashboard hr company
            $jobstatus_tetap = Employee::where('job_status_id', '1')->count();
            $jobstatus_pkwt = Employee::where('job_status_id', '2')->count();
            //employee by location dashboard hr company
            $placeofbirth_jakarta = Employee::where('place_of_birth', 'Jakarta')->count();
            $placeofbirth_bandung = Employee::where('place_of_birth', 'Bandung')->count();
            $placeofbirth_padang = Employee::where('place_of_birth', 'Padang')->count();
            $placeofbirth_lainnya = Employee::whereNotIn('place_of_birth', ['Jakarta', 'Bandung', 'Padang'])->count();
        } else {
            $datenewdata2 = $date;
            $explode_Date = explode('-', $datenewdata2);
            $tahun = $explode_Date[0];
            $bulan = $explode_Date[1];
            $total_employee = Employee::whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)
                ->count();
            $jobstatus_tetap = Employee::where('job_status_id', '1')
                ->whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)
                ->count();
            $jobstatus_pkwt = Employee::where('job_status_id', '2')
                ->whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)
                ->count();
            //employee by location dashboard hr company
            $placeofbirth_jakarta = Employee::where('place_of_birth', 'Jakarta')
                ->whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)->count();
            $placeofbirth_bandung = Employee::where('place_of_birth', 'Bandung')->whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)->count();
            $placeofbirth_padang = Employee::where('place_of_birth', 'Padang')->whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)->count();
            $placeofbirth_lainnya = Employee::whereNotIn('place_of_birth', ['Jakarta', 'Bandung', 'Padang'])->whereYear('join_date', $tahun)
                ->whereMonth('join_date', $bulan)->count();
        }

        //masa kerja
        $averageTenureInYears = Employee::selectRaw('AVG(DATEDIFF(NOW(), join_date) / 365.25) AS average_tenure')->value('average_tenure');

        $years = floor($averageTenureInYears);
        $days = ($averageTenureInYears - $years) * 365;
        $weeks = floor($days / 7);
        $days = $days % 7;

        // $formattedTenure = "{$years} tahun {$weeks} minggu";
        $formattedTenure = "{$years} tahun";

        //employee year of service
        // $employee = Employee::findOrFail($total_employee); // Ganti ini dengan cara Anda mendapatkan data karyawan
        // $joinDate = new Carbon($employee->join_date); // Konversi tanggal masuk ke objek Carbon
        // $today = Carbon::today(); // Tanggal hari ini
        // $masa_kerja = $joinDate->diffInYears($today) . " Tahun " . $joinDate->diffInMonths($today) . " Bulan ";


        //employee by gender dashboard hr company
        $employee_pria = Employee::where('gender', 'L')->count();
        $employee_wanita = Employee::where('gender', 'P')->count();
        $employee_total = Employee::count();

        if ($employee_total === 0) {
            $percent_pria = 0;
            $percent_wanita = 0;
        } else {
            $percent_pria = round(($employee_pria / $employee_total) * 100);
            $percent_wanita = round(($employee_wanita / $employee_total) * 100);
        }

        //employee by time off dashboard hr company
        $timeoff_cuti = TimeOff::where('name', 'Cuti Tahunan')->whereYear('start_date', '2023')->whereMonth('start_date', '8')->count();
        $timeoff_izin = TimeOff::where('name', 'Izin')->whereYear('start_date', '2023')->whereMonth('start_date', '8')->count();
        $timeoff_lainnya = TimeOff::whereNotIn('name', ['Cuti Tahunan', 'Izin'])->whereYear('start_date', '2023')->whereMonth('start_date', '8')->count();
        $timeoff_total = TimeOff::count();

        if ($timeoff_total === 0) {
            $percent_cuti = 0;
            $percent_izin = 0;
            $percent_timeoff = 0;
        } else {
            $percent_cuti = round(($timeoff_cuti / $timeoff_total) * 100);
            $percent_izin = round(($timeoff_izin / $timeoff_total) * 100);
            $percent_timeoff = round(($timeoff_lainnya / $timeoff_total) * 100);
        }

        //employee by education dashboard hr company
        $education_diploma = Employee::whereIn('education_id', ['5', '6', '7', '8'])->count();
        $education_S1 = Employee::where('education_id', '9')->count();
        $education_S2 = Employee::where('education_id', '10')->count();
        $education_S3 = Employee::where('education_id', '11')->count();
        // $total_employee= Employee::count();

        if ($total_employee == 0) {
            $percent_diploma = 0;
            $percent_S1 = 0;
            $percent_S2 = 0;
            $percent_S3 = 0;
        } else {
            $percent_diploma = round(($education_diploma / $total_employee) * 100);
            $percent_S1 = round(($education_S1 / $total_employee) * 100);
            $percent_S2 = round(($education_S2 / $total_employee) * 100);
            $percent_S3 = round(($education_S3 / $total_employee) * 100);
        }

        if ($total_employee == 0) {
            $percent_tetap = 0;
            $percent_pkwt = 0;
        } else {
            $percent_tetap = round(($jobstatus_tetap / $total_employee) * 100);
            $percent_pkwt = round(($jobstatus_pkwt / $total_employee) * 100);
        }



        if ($total_employee === 0) {
            $percent_jakarta = 0;
            $percent_bandung = 0;
            $percent_padang = 0;
            $percent_lainnya = 0;
        } else {
            $percent_jakarta = round(($placeofbirth_jakarta / $total_employee) * 100, 2);
            $percent_bandung = round(($placeofbirth_bandung / $total_employee) * 100, 2);
            $percent_padang = round(($placeofbirth_padang / $total_employee) * 100, 2);
            $percent_lainnya = round(($placeofbirth_lainnya / $total_employee) * 100, 2);
        }

        $directorat_it_comp = Employee::where('directorate_id', '1')
            ->whereDate(DB::raw('DATE_FORMAT(join_date, "%y-%d")'), $datenewdata2)
            ->count();

        $directorat_finance_comp = Employee::where('directorate_id', '2')
            ->whereDate(DB::raw('DATE_FORMAT(join_date, "%y-%d")'), $datenewdata2)
            ->count();

        $directorat_marketing_comp = Employee::where('directorate_id', '3')
            ->whereDate(DB::raw('DATE_FORMAT(join_date, "%y-%d")'), $datenewdata2)
            ->count();


        //employee by division dashboard hr company
        $division_sa_comp = Employee::where('division_id', '1')
            ->whereDate(DB::raw('DATE_FORMAT(join_date, "%y-%d")'), $datenewdata2)
            ->count();
        $division_dpi_comp = Employee::where('division_id', '2')
            ->whereDate(DB::raw('DATE_FORMAT(join_date, "%y-%d")'), $datenewdata2)
            ->count();
        $division_operation_comp = Employee::where('division_id', '3')
            ->whereDate(DB::raw('DATE_FORMAT(join_date, "%y-%d")'), $datenewdata2)
            ->count();

        //employee by old dashboard hr company
        $kurang20 = [];
        $dari21_25 = [];
        $dari26_30 = [];
        $dari31_35 = [];
        $dari36_40 = [];
        $dari41_45 = [];
        $dari46_50 = [];
        $lebih50 = [];

        $old_age = Employee::selectRaw("DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),birth_date)), '%Y')+0 AS Age")->get();
        foreach ($old_age as $age) {
            if ($age->Age <= 20) {
                array_push($kurang20, $age->Age);
            }
            if ($age->Age > 21 && $age->Age < 25) {
                array_push($dari21_25, $age->Age);
            }
            if ($age->Age > 25 && $age->Age < 30) {
                array_push($dari26_30, $age->Age);
            }
            if ($age->Age > 31 && $age->Age < 35) {
                array_push($dari31_35, $age->Age);
            }
            if ($age->Age > 36 && $age->Age < 40) {
                array_push($dari36_40, $age->Age);
            }
            if ($age->Age > 41 && $age->Age < 45) {
                array_push($dari41_45, $age->Age);
            }
            if ($age->Age > 46 && $age->Age < 50) {
                array_push($dari46_50, $age->Age);
            }
            if ($age->Age > 50) {
                array_push($lebih50, $age->Age);
            }
        }
        


        return view('dashboard2', [
            'total_employees' => $total_employee,
            'masa_kerja' => $formattedTenure,
            'employee_pria' => $employee_pria,
            'employee_wanita' => $employee_wanita,
            'percent_pria' => $percent_pria,
            'percent_wanita' => $percent_wanita,
            'timeoff_cuti' => $timeoff_cuti,
            'timeoff_izin' => $timeoff_izin,
            'timeoff_lainnya' => $timeoff_lainnya,
            'percent_cuti' => $percent_cuti,
            'percent_izin' => $percent_izin,
            'percent_timeoff' => $percent_timeoff,
            'education_diploma' => $education_diploma,
            'education_S1' => $education_S1,
            'education_S2' => $education_S2,
            'education_S3' => $education_S3,
            'percent_diploma' => $percent_diploma,
            'percent_S1' => $percent_S1,
            'percent_S2' => $percent_S2,
            'percent_S3' => $percent_S3,
            'jobstatus_tetap' => $jobstatus_tetap,
            'jobstatus_pkwt' => $jobstatus_pkwt,
            'percent_tetap' => $percent_tetap,
            'percent_pkwt' => $percent_pkwt,
            'placeofbirth_jakarta' => $placeofbirth_jakarta,
            'placeofbirth_bandung' => $placeofbirth_bandung,
            'placeofbirth_padang' => $placeofbirth_padang,
            'placeofbirth_lainnya' => $placeofbirth_lainnya,
            'percent_jakarta' => $percent_jakarta,
            'percent_bandung' => $percent_bandung,
            'percent_padang' => $percent_padang,
            'percent_lainnya' => $percent_lainnya,
            'directorat_it_comp' => $directorat_it_comp,
            'directorat_finance_comp' => $directorat_finance_comp,
            'directorat_marketing_comp' => $directorat_marketing_comp,
            'division_sa_comp' => $division_sa_comp,
            'division_dpi_comp' => $division_dpi_comp,
            'division_operation_comp' => $division_operation_comp,
            'kurang20' => count($kurang20),
            'dari21_25' => count($dari21_25),
            'dari26_30' => count($dari26_30),
            'dari31_35' => count($dari31_35),
            'dari36_40' => count($dari36_40),
            'dari41_45' => count($dari41_45),
            'dari46_50' => count($dari46_50),
            'lebih50' => count($lebih50),
            'datenewdata2' => $datenewdata2,
        ]);
    }
}