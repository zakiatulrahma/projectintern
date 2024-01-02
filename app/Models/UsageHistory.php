<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UsageHistory
 * 
 * @property int $id
 * @property int $company_id
 * @property string $employee_name
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Company $company
 *
 * @package App\Models
 */
class UsageHistory extends Model
{
	protected $table = 'usage_history';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'employee_name',
		'description'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}
