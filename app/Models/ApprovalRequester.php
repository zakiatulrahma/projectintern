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
 * Class ApprovalRequester
 * 
 * @property int $id
 * @property int $master_approval_id
 * @property int $company_id
 * @property string $type
 * @property string $value
 * @property int $order
 * @property int $is_need_approval
 * @property int $is_serial
 * @property int $is_all
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property MasterApproval $master_approval
 * @property MasterApprovalType $master_approval_type
 * @property Collection|ApprovalApprover[] $approval_approvers
 * @property Collection|Approval[] $approvals
 *
 * @package App\Models
 */
class ApprovalRequester extends Model
{
	use SoftDeletes;
	protected $table = 'approval_requesters';

	protected $casts = [
		'master_approval_id' => 'int',
		'company_id' => 'int',
		'order' => 'int',
		'is_need_approval' => 'int',
		'is_serial' => 'int',
		'is_all' => 'int'
	];

	protected $fillable = [
		'master_approval_id',
		'company_id',
		'type',
		'value',
		'order',
		'is_need_approval',
		'is_serial',
		'is_all'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function master_approval()
	{
		return $this->belongsTo(MasterApproval::class);
	}

	public function master_approval_type()
	{
		return $this->belongsTo(MasterApprovalType::class, 'type', 'type');
	}

	public function approval_approvers()
	{
		return $this->hasMany(ApprovalApprover::class);
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}
}
