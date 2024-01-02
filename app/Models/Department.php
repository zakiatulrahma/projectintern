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
 * Class Department
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class Department extends Model
{
	use SoftDeletes;
	protected $table = 'departments';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'name'
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
