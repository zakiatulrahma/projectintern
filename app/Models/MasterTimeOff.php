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
 * Class MasterTimeOff
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property Carbon|null $effective_date
 * @property Carbon|null $expiry_date
 * @property string|null $description
 * @property int $is_default_new_employee
 * @property int $is_unlimited_balance
 * @property int $duration
 * @property int $is_include_day_off
 * @property int $is_allow_half_day
 * @property int $is_half_day
 * @property int $is_default
 * @property int $is_emerge_at_join
 * @property int $emerge_join_month
 * @property int $is_show
 * @property int $max_request
 * @property int $is_allow_minus
 * @property int $minus_amount
 * @property int $is_carry_forward
 * @property int $carry_amount
 * @property int $carry_expired_month
 * @property int $is_time_off_compensation
 * @property int $is_attachment_mandatory
 * @property string|null $policy_type
 * @property int $policy_type_day
 * @property int $policy_type_month
 * @property int $is_policy_expiry
 * @property int $policy_expiry_month
 * @property int $policy_expiry_day_value
 * @property int $policy_expiry_month_value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|MasterTimeOffCompany[] $master_time_off_companies
 *
 * @package App\Models
 */
class MasterTimeOff extends Model
{
	use SoftDeletes;
	protected $table = 'master_time_offs';

	protected $casts = [
		'effective_date' => 'datetime',
		'expiry_date' => 'datetime',
		'is_default_new_employee' => 'int',
		'is_unlimited_balance' => 'int',
		'duration' => 'int',
		'is_include_day_off' => 'int',
		'is_allow_half_day' => 'int',
		'is_half_day' => 'int',
		'is_default' => 'int',
		'is_emerge_at_join' => 'int',
		'emerge_join_month' => 'int',
		'is_show' => 'int',
		'max_request' => 'int',
		'is_allow_minus' => 'int',
		'minus_amount' => 'int',
		'is_carry_forward' => 'int',
		'carry_amount' => 'int',
		'carry_expired_month' => 'int',
		'is_time_off_compensation' => 'int',
		'is_attachment_mandatory' => 'int',
		'policy_type_day' => 'int',
		'policy_type_month' => 'int',
		'is_policy_expiry' => 'int',
		'policy_expiry_month' => 'int',
		'policy_expiry_day_value' => 'int',
		'policy_expiry_month_value' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'effective_date',
		'expiry_date',
		'description',
		'is_default_new_employee',
		'is_unlimited_balance',
		'duration',
		'is_include_day_off',
		'is_allow_half_day',
		'is_half_day',
		'is_default',
		'is_emerge_at_join',
		'emerge_join_month',
		'is_show',
		'max_request',
		'is_allow_minus',
		'minus_amount',
		'is_carry_forward',
		'carry_amount',
		'carry_expired_month',
		'is_time_off_compensation',
		'is_attachment_mandatory',
		'policy_type',
		'policy_type_day',
		'policy_type_month',
		'is_policy_expiry',
		'policy_expiry_month',
		'policy_expiry_day_value',
		'policy_expiry_month_value'
	];

	public function master_time_off_companies()
	{
		return $this->hasMany(MasterTimeOffCompany::class);
	}
}
