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
 * Class AttendanceRequest
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $approval_id
 * @property int $attendance_master_schedule_id
 * @property int $attendance_shift_id
 * @property string $attendance_name_shift
 * @property Carbon $start_working_time
 * @property Carbon $end_working_time
 * @property Carbon|null $checkin
 * @property Carbon|null $checkout
 * @property Carbon $date
 * @property string|null $notes
 * @property string $file
 * @property int $status
 * @property Carbon|null $approved_time
 * @property Carbon|null $is_cancel
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Approval $approval
 * @property AttendanceMasterSchedule $attendance_master_schedule
 * @property AttendanceShift $attendance_shift
 * @property Employee $employee
 * @property Collection|AttendanceHistory[] $attendance_histories
 *
 * @package App\Models
 */
class AttendanceRequest extends Model
{
	use SoftDeletes;
	protected $table = 'attendance_requests';

	protected $casts = [
		'employee_id' => 'int',
		'approval_id' => 'int',
		'attendance_master_schedule_id' => 'int',
		'attendance_shift_id' => 'int',
		'start_working_time' => 'datetime',
		'end_working_time' => 'datetime',
		'checkin' => 'datetime',
		'checkout' => 'datetime',
		'date' => 'datetime',
		'status' => 'int',
		'approved_time' => 'datetime',
		'is_cancel' => 'datetime'
	];

	protected $fillable = [
		'employee_id',
		'approval_id',
		'attendance_master_schedule_id',
		'attendance_shift_id',
		'attendance_name_shift',
		'start_working_time',
		'end_working_time',
		'checkin',
		'checkout',
		'date',
		'notes',
		'file',
		'status',
		'approved_time',
		'is_cancel'
	];

	public function approval()
	{
		return $this->belongsTo(Approval::class);
	}

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

	public function attendance_histories()
	{
		return $this->hasMany(AttendanceHistory::class);
	}
}
