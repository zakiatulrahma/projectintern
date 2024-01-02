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
 * Class AttendanceShift
 * 
 * @property int $id
 * @property int $company_id
 * @property int $attendance_master_schedule_id
 * @property int $attendance_master_shift_id
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property AttendanceMasterSchedule $attendance_master_schedule
 * @property AttendanceMasterShift $attendance_master_shift
 * @property Company $company
 * @property Collection|AttendanceRequest[] $attendance_requests
 * @property AttendanceShiftDetail $attendance_shift_detail
 * @property Collection|Attendance[] $attendances
 *
 * @package App\Models
 */
class AttendanceShift extends Model
{
	use SoftDeletes;
	protected $table = 'attendance_shifts';

	protected $casts = [
		'company_id' => 'int',
		'attendance_master_schedule_id' => 'int',
		'attendance_master_shift_id' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'company_id',
		'attendance_master_schedule_id',
		'attendance_master_shift_id',
		'order'
	];

	public function attendance_master_schedule()
	{
		return $this->belongsTo(AttendanceMasterSchedule::class);
	}

	public function attendance_master_shift()
	{
		return $this->belongsTo(AttendanceMasterShift::class);
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function attendance_requests()
	{
		return $this->hasMany(AttendanceRequest::class);
	}

	public function attendance_shift_detail()
	{
		return $this->hasOne(AttendanceShiftDetail::class);
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}
}
