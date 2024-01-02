<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attendance
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $attendance_master_schedule_id
 * @property int $attendance_shift_id
 * @property string $attendance_name_shift
 * @property int|null $time_off_id
 * @property int|null $overtime_id
 * @property Carbon $date
 * @property Carbon|null $checkin
 * @property Carbon|null $checkout
 * @property Carbon|null $working_hour
 * @property Carbon|null $start_working_time
 * @property Carbon|null $end_working_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property AttendanceMasterSchedule $attendance_master_schedule
 * @property AttendanceShift $attendance_shift
 * @property Employee $employee
 * @property Overtime|null $overtime
 * @property TimeOff|null $time_off
 *
 * @package App\Models
 */
class Attendance extends Model
{
	use SoftDeletes;
	protected $table = 'attendances';

	protected $casts = [
		'employee_id' => 'int',
		'attendance_master_schedule_id' => 'int',
		'attendance_shift_id' => 'int',
		'time_off_id' => 'int',
		'overtime_id' => 'int',
		'date' => 'datetime',
		'checkin' => 'datetime',
		'checkout' => 'datetime',
		'working_hour' => 'datetime',
		'start_working_time' => 'datetime',
		'end_working_time' => 'datetime'
	];

	protected $fillable = [
		'employee_id',
		'attendance_master_schedule_id',
		'attendance_shift_id',
		'attendance_name_shift',
		'time_off_id',
		'overtime_id',
		'date',
		'checkin',
		'checkout',
		'working_hour',
		'start_working_time',
		'end_working_time'
	];

	public function attendance_master_schedule()
	{
		return $this->belongsTo(AttendanceMasterSchedule::class);
	}

	public function attendance_shift()
	{
		return $this->belongsTo(AttendanceShift::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function overtime()
	{
		return $this->belongsTo(Overtime::class);
	}

	public function time_off()
	{
		return $this->belongsTo(TimeOff::class);
	}
}
