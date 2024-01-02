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
 * Class MasterApproval
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|ApprovalCompany[] $approval_companies
 * @property Collection|ApprovalNeedMyApproval[] $approval_need_my_approvals
 * @property Collection|ApprovalRequester[] $approval_requesters
 * @property ApprovalTemp $approval_temp
 * @property Collection|Approval[] $approvals
 *
 * @package App\Models
 */
class MasterApproval extends Model
{
	use SoftDeletes;
	protected $table = 'master_approvals';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'type',
		'name',
		'description',
		'status'
	];

	public function approval_companies()
	{
		return $this->hasMany(ApprovalCompany::class, 'type', 'type');
	}

	public function approval_need_my_approvals()
	{
		return $this->hasMany(ApprovalNeedMyApproval::class);
	}

	public function approval_requesters()
	{
		return $this->hasMany(ApprovalRequester::class);
	}

	public function approval_temp()
	{
		return $this->hasOne(ApprovalTemp::class);
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}
}
