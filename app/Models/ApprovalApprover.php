<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ApprovalApprover
 * 
 * @property int $id
 * @property int $approval_requester_id
 * @property string $type
 * @property string $value
 * @property int $is_all
 * @property int $is_serial
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property ApprovalRequester $approval_requester
 * @property MasterApprovalType $master_approval_type
 *
 * @package App\Models
 */
class ApprovalApprover extends Model
{
	use SoftDeletes;
	protected $table = 'approval_approvers';

	protected $casts = [
		'approval_requester_id' => 'int',
		'is_all' => 'int',
		'is_serial' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'approval_requester_id',
		'type',
		'value',
		'is_all',
		'is_serial',
		'order'
	];

	public function approval_requester()
	{
		return $this->belongsTo(ApprovalRequester::class);
	}

	public function master_approval_type()
	{
		return $this->belongsTo(MasterApprovalType::class, 'type', 'type');
	}
}
