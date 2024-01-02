<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApprovalHistory
 * 
 * @property int $id
 * @property int $approval_id
 * @property int $approval_detail_id
 * @property int|null $employee_id
 * @property string $type
 * @property string $value
 * @property Carbon|null $approved_date
 * @property int|null $approved_by
 * @property string|null $approved_note
 * @property int $status
 * @property int $step
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ApprovalDetail $approval_detail
 * @property Approval $approval
 * @property Employee|null $employee
 * @property MasterApprovalType $master_approval_type
 * @property ApprovalNeedMyApproval $approval_need_my_approval
 *
 * @package App\Models
 */
class ApprovalHistory extends Model
{
	protected $table = 'approval_histories';

	protected $casts = [
		'approval_id' => 'int',
		'approval_detail_id' => 'int',
		'employee_id' => 'int',
		'approved_date' => 'datetime',
		'approved_by' => 'int',
		'status' => 'int',
		'step' => 'int'
	];

	protected $fillable = [
		'approval_id',
		'approval_detail_id',
		'employee_id',
		'type',
		'value',
		'approved_date',
		'approved_by',
		'approved_note',
		'status',
		'step'
	];

	public function approval_detail()
	{
		return $this->belongsTo(ApprovalDetail::class);
	}

	public function approval()
	{
		return $this->belongsTo(Approval::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function master_approval_type()
	{
		return $this->belongsTo(MasterApprovalType::class, 'type', 'type');
	}

	public function approval_need_my_approval()
	{
		return $this->hasOne(ApprovalNeedMyApproval::class);
	}
}
