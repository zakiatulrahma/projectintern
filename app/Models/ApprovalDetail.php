<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApprovalDetail
 * 
 * @property int $id
 * @property int $approval_id
 * @property string $approval_approver_type
 * @property string $approval_approver_value
 * @property int $approval_approver_is_all
 * @property int $status
 * @property int $is_serial
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MasterApprovalType $master_approval_type
 * @property Approval $approval
 * @property Collection|ApprovalHistory[] $approval_histories
 *
 * @package App\Models
 */
class ApprovalDetail extends Model
{
	protected $table = 'approval_details';

	protected $casts = [
		'approval_id' => 'int',
		'approval_approver_is_all' => 'int',
		'status' => 'int',
		'is_serial' => 'int'
	];

	protected $fillable = [
		'approval_id',
		'approval_approver_type',
		'approval_approver_value',
		'approval_approver_is_all',
		'status',
		'is_serial'
	];

	public function master_approval_type()
	{
		return $this->belongsTo(MasterApprovalType::class, 'approval_approver_type', 'type');
	}

	public function approval()
	{
		return $this->belongsTo(Approval::class);
	}

	public function approval_histories()
	{
		return $this->hasMany(ApprovalHistory::class);
	}
}
