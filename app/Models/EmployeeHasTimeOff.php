<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeHasTimeOff
 * 
 * @property string $master_time_off_company_id
 * @property int $employee_id
 * 
 * @property Employee $employee
 *
 * @package App\Models
 */
class EmployeeHasTimeOff extends Model
{
	protected $table = 'employee_has_time_offs';
	protected $primaryKey = 'employee_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int'
	];

	protected $fillable = [
		'master_time_off_company_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
