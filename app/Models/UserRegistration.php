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
 * Class UserRegistration
 * 
 * @property int $id
 * @property int $package_id
 * @property string $name
 * @property string $email
 * @property string $no_hp
 * @property string $company_name
 * @property string $province
 * @property string $district
 * @property int $type_of_busines_id
 * @property string|null $other
 * @property int $company_size_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CompanySize $company_size
 * @property Package $package
 * @property TypeOfBusine $type_of_busine
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class UserRegistration extends Model
{
	use SoftDeletes;
	protected $table = 'user_registrations';

	protected $casts = [
		'package_id' => 'int',
		'type_of_busines_id' => 'int',
		'company_size_id' => 'int'
	];

	protected $fillable = [
		'package_id',
		'name',
		'email',
		'no_hp',
		'company_name',
		'province',
		'district',
		'type_of_busines_id',
		'other',
		'company_size_id'
	];

	public function company_size()
	{
		return $this->belongsTo(CompanySize::class);
	}

	public function package()
	{
		return $this->belongsTo(Package::class);
	}

	public function type_of_busine()
	{
		return $this->belongsTo(TypeOfBusine::class, 'type_of_busines_id');
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
