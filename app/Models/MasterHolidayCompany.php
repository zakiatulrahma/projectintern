<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MasterHolidayCompany
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $code
 * @property Carbon $date
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 *
 * @package App\Models
 */
class MasterHolidayCompany extends Model
{
	use SoftDeletes;
	protected $table = 'master_holiday_companies';

	protected $casts = [
		'company_id' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'company_id',
		'name',
		'code',
		'date',
		'description'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}
