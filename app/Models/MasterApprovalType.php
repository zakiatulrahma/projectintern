<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MasterApprovalType
 * 
 * @property string $name
 * @property string $type
 * @property int $is_requester
 * @property string|null $deleted_at
 * 
 * @property Collection|ApprovalApprover[] $approval_approvers
 * @property Collection|ApprovalDetail[] $approval_details
 * @property Collection|ApprovalHistory[] $approval_histories
 * @property Collection|ApprovalRequester[] $approval_requesters
 * @property Collection|Approval[] $approvals
 *
 * @package App\Models
 */
class MasterApprovalType extends Model
{
	use SoftDeletes;
	protected $table = 'master_approval_types';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'is_requester' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'is_requester'
	];

	public function approval_approvers()
	{
		return $this->hasMany(ApprovalApprover::class, 'type', 'type');
	}

	public function approval_details()
	{
		return $this->hasMany(ApprovalDetail::class, 'approval_approver_type', 'type');
	}

	public function approval_histories()
	{
		return $this->hasMany(ApprovalHistory::class, 'type', 'type');
	}

	public function approval_requesters()
	{
		return $this->hasMany(ApprovalRequester::class, 'type', 'type');
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class, 'approval_requester_type', 'type');
	}
}
