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
 * Class AttendanceLocation
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $label_name
 * @property float $latitude
 * @property float $longitude
 * @property int $radius
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Collection|AttendanceHistory[] $attendance_histories
 *
 * @package App\Models
 */
class AttendanceLocation extends Model
{
	use SoftDeletes;
	protected $table = 'attendance_locations';

	protected $casts = [
		'company_id' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'radius' => 'int'
	];

	protected $fillable = [
		'company_id',
		'name',
		'label_name',
		'latitude',
		'longitude',
		'radius'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function attendance_histories()
	{
		return $this->hasMany(AttendanceHistory::class);
	}
}
