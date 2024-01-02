<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeDivision
 * 
 * @property int $employee_id
 * @property int $division_id
 * 
 * @property Division $division
 * @property Employee $employee
 *
 * @package App\Models
 */
class EmployeeDivision extends Model
{
	protected $table = 'employee_divisions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int',
		'division_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'division_id'
	];

	public function division()
	{
		return $this->belongsTo(Division::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
