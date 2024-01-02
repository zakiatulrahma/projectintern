<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TimeOffBalance
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $master_time_off_company_id
 * @property float $balance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Employee $employee
 * @property MasterTimeOffCompany $master_time_off_company
 *
 * @package App\Models
 */
class TimeOffBalance extends Model
{
	use SoftDeletes;
	protected $table = 'time_off_balances';

	protected $casts = [
		'employee_id' => 'int',
		'master_time_off_company_id' => 'int',
		'balance' => 'float'
	];

	protected $fillable = [
		'employee_id',
		'master_time_off_company_id',
		'balance'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function master_time_off_company()
	{
		return $this->belongsTo(MasterTimeOffCompany::class);
	}
}
