<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeHasSchedule
 * 
 * @property int $employee_id
 * @property int $attendance_master_schedule_id
 * 
 * @property AttendanceMasterSchedule $attendance_master_schedule
 * @property Employee $employee
 *
 * @package App\Models
 */
class EmployeeHasSchedule extends Model
{
	protected $table = 'employee_has_schedules';
	protected $primaryKey = 'employee_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int',
		'attendance_master_schedule_id' => 'int'
	];

	protected $fillable = [
		'attendance_master_schedule_id'
	];

	public function attendance_master_schedule()
	{
		return $this->belongsTo(AttendanceMasterSchedule::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
