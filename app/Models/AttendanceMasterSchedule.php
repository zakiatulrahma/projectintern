<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AttendanceMasterSchedule
 * 
 * @property int $id
 * @property int $company_id
 * @property int $cut_off_start
 * @property string $name
 * @property Carbon $effective_date
 * @property int $override_national_holiday
 * @property int $override_company_holiday
 * @property int $override_special_holiday
 * @property int $is_flexibel
 * @property int $is_default
 * @property int $required_selfie
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Collection|AttendanceRequest[] $attendance_requests
 * @property Collection|AttendanceShift[] $attendance_shifts
 * @property Collection|Attendance[] $attendances
 * @property Collection|EmployeeHasSchedule[] $employee_has_schedules
 *
 * @package App\Models
 */
class AttendanceMasterSchedule extends Model
{
	use SoftDeletes;
	protected $table = 'attendance_master_schedules';

	protected $casts = [
		'company_id' => 'int',
		'cut_off_start' => 'int',
		'effective_date' => 'datetime',
		'override_national_holiday' => 'int',
		'override_company_holiday' => 'int',
		'override_special_holiday' => 'int',
		'is_flexibel' => 'int',
		'is_default' => 'int',
		'required_selfie' => 'int'
	];

	protected $fillable = [
		'company_id',
		'cut_off_start',
		'name',
		'effective_date',
		'override_national_holiday',
		'override_company_holiday',
		'override_special_holiday',
		'is_flexibel',
		'is_default',
		'required_selfie'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function attendance_requests()
	{
		return $this->hasMany(AttendanceRequest::class);
	}

	public function attendance_shifts()
	{
		return $this->hasMany(AttendanceShift::class);
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}

	public function employee_has_schedules()
	{
		return $this->hasMany(EmployeeHasSchedule::class);
	}
}
