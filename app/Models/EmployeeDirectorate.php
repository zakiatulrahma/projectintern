<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeDirectorate
 * 
 * @property int $employee_id
 * @property int $directorate_id
 * 
 * @property Directorate $directorate
 * @property Employee $employee
 *
 * @package App\Models
 */
class EmployeeDirectorate extends Model
{
	protected $table = 'employee_directorates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int',
		'directorate_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'directorate_id'
	];

	public function directorate()
	{
		return $this->belongsTo(Directorate::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
