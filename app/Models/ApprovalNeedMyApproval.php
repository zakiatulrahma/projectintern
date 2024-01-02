<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ApprovalNeedMyApproval
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $approval_history_id
 * @property int $approval_id
 * @property int $master_approval_id
 * @property string $description
 * @property string $file
 * @property string $data_change
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property ApprovalHistory $approval_history
 * @property Approval $approval
 * @property Employee $employee
 * @property MasterApproval $master_approval
 *
 * @package App\Models
 */
class ApprovalNeedMyApproval extends Model
{
	use SoftDeletes;
	protected $table = 'approval_need_my_approvals';

	protected $casts = [
		'employee_id' => 'int',
		'approval_history_id' => 'int',
		'approval_id' => 'int',
		'master_approval_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'approval_history_id',
		'approval_id',
		'master_approval_id',
		'description',
		'file',
		'data_change'
	];

	public function approval_history()
	{
		return $this->belongsTo(ApprovalHistory::class);
	}

	public function approval()
	{
		return $this->belongsTo(Approval::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function master_approval()
	{
		return $this->belongsTo(MasterApproval::class);
	}
}
