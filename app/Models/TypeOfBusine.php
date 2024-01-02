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
 * Class TypeOfBusine
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
class TypeOfBusine extends Model
{
	use SoftDeletes;
	protected $table = 'type_of_busines';

	protected $fillable = [
		'name'
	];

	public function user_registrations()
	{
		return $this->hasMany(UserRegistration::class, 'type_of_busines_id');
	}
}
