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
 * Class Division
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $alias
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class Division extends Model
{
	use SoftDeletes;
	protected $table = 'divisions';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'name',
		'alias'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}
}
