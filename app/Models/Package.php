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
 * Class Package
 * 
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $duration
 * @property string $currency
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property PackageDetail $package_detail
 * @property Collection|UserRegistration[] $user_registrations
 *
 * @package App\Models
 */
class Package extends Model
{
	use SoftDeletes;
	protected $table = 'packages';

	protected $casts = [
		'price' => 'float'
	];

	protected $fillable = [
		'name',
		'price',
		'duration',
		'currency'
	];

	public function package_detail()
	{
		return $this->hasOne(PackageDetail::class);
	}

	public function user_registrations()
	{
		return $this->hasMany(UserRegistration::class);
	}
}
