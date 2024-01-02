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
 * Class Approval
 * 
 * @property int $id
 * @property int $company_id
 * @property int $employee_id
 * @property int $approval_requester_id
 * @property int $master_approval_id
 * @property string $approval_requester_type
 * @property string $approval_requester_value
 * @property string $description
 * @property string $file
 * @property int $status
 * @property Carbon|null $approved_time
 * @property int $step
 * @property int $is_serial
 * @property int $is_all
 * @property Carbon|null $is_cancel
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property ApprovalRequester $approval_requester
 * @property MasterApprovalType $master_approval_type
 * @property Company $company
 * @property Employee $employee
 * @property MasterApproval $master_approval
 * @property Collection|ApprovalDetail[] $approval_details
 * @property Collection|ApprovalHistory[] $approval_histories
 * @property Collection|ApprovalNeedMyApproval[] $approval_need_my_approvals
 * @property ApprovalTemp $approval_temp
 * @property Collection|AttendanceRequest[] $attendance_requests
 * @property Collection|Overtime[] $overtimes
 * @property Collection|TimeOff[] $time_offs
 *
 * @package App\Models
 */
class Approval extends Model
{
	use SoftDeletes;
	protected $table = 'approvals';

	protected $casts = [
		'company_id' => 'int',
		'employee_id' => 'int',
		'approval_requester_id' => 'int',
		'master_approval_id' => 'int',
		'status' => 'int',
		'approved_time' => 'datetime',
		'step' => 'int',
		'is_serial' => 'int',
		'is_all' => 'int',
		'is_cancel' => 'datetime'
	];

	protected $fillable = [
		'company_id',
		'employee_id',
		'approval_requester_id',
		'master_approval_id',
		'approval_requester_type',
		'approval_requester_value',
		'description',
		'file',
		'status',
		'approved_time',
		'step',
		'is_serial',
		'is_all',
		'is_cancel'
	];

	public function approval_requester()
	{
		return $this->belongsTo(ApprovalRequester::class);
	}

	public function master_approval_type()
	{
		return $this->belongsTo(MasterApprovalType::class, 'approval_requester_type', 'type');
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function master_approval()
	{
		return $this->belongsTo(MasterApproval::class);
	}

	public function approval_details()
	{
		return $this->hasMany(ApprovalDetail::class);
	}

	public function approval_histories()
	{
		return $this->hasMany(ApprovalHistory::class);
	}

	public function approval_need_my_approvals()
	{
		return $this->hasMany(ApprovalNeedMyApproval::class);
	}

	public function approval_temp()
	{
		return $this->hasOne(ApprovalTemp::class);
	}

	public function attendance_requests()
	{
		return $this->hasMany(AttendanceRequest::class);
	}

	public function overtimes()
	{
		return $this->hasMany(Overtime::class);
	}

	public function time_offs()
	{
		return $this->hasMany(TimeOff::class);
	}
}
