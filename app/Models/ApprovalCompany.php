<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ApprovalCompany
 * 
 * @property int $id
 * @property int $master_approval_id
 * @property string $type
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property MasterApproval $master_approval
 *
 * @package App\Models
 */
class ApprovalCompany extends Model
{
	use SoftDeletes;
	protected $table = 'approval_companies';

	protected $casts = [
		'master_approval_id' => 'int',
		'company_id' => 'int'
	];

	protected $fillable = [
		'master_approval_id',
		'type',
		'company_id'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function master_approval()
	{
		return $this->belongsTo(MasterApproval::class, 'type', 'type');
	}
}
