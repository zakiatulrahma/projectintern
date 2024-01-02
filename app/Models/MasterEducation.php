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
 * Class MasterEducation
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class MasterEducation extends Model
{
	use SoftDeletes;
	protected $table = 'master_education';

	protected $fillable = [
		'name'
	];

	public function employees()
	{
		return $this->hasMany(Employee::class, 'education_id');
	}
}
