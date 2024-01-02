<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeDepartment
 * 
 * @property int $employee_id
 * @property int $department_id
 * 
 * @property Department $department
 * @property Employee $employee
 *
 * @package App\Models
 */
class EmployeeDepartment extends Model
{
	protected $table = 'employee_departments';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int',
		'department_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'department_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
