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
 * Class CompanySize
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|UserRegistration[] $user_registrations
 *
 * @package App\Models
 */
class CompanySize extends Model
{
	use SoftDeletes;
	protected $table = 'company_sizes';

	protected $fillable = [
		'name'
	];

	public function user_registrations()
	{
		return $this->hasMany(UserRegistration::class);
	}
}
