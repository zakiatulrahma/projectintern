<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ApprovalTemp
 * 
 * @property int $approval_id
 * @property int $master_approval_id
 * @property string|null $data
 * @property string|null $data_change
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Approval $approval
 * @property MasterApproval $master_approval
 *
 * @package App\Models
 */
class ApprovalTemp extends Model
{
	use SoftDeletes;
	protected $table = 'approval_temps';
	public $incrementing = false;

	protected $casts = [
		'approval_id' => 'int',
		'master_approval_id' => 'int'
	];

	protected $fillable = [
		'approval_id',
		'master_approval_id',
		'data',
		'data_change'
	];

	public function approval()
	{
		return $this->belongsTo(Approval::class);
	}

	public function master_approval()
	{
		return $this->belongsTo(MasterApproval::class);
	}
}
