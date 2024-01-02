<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeHasRole
 * 
 * @property int $role_id
 * @property int $employee_id
 * 
 * @property Employee $employee
 * @property Role $role
 *
 * @package App\Models
 */
class EmployeeHasRole extends Model
{
	protected $table = 'employee_has_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'employee_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'employee_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
