<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeJobPosition
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $job_position_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Employee $employee
 * @property JobPosition $job_position
 *
 * @package App\Models
 */
class EmployeeJobPosition extends Model
{
	use SoftDeletes;
	protected $table = 'employee_job_positions';

	protected $casts = [
		'employee_id' => 'int',
		'job_position_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'job_position_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function job_position()
	{
		return $this->belongsTo(JobPosition::class);
	}
}
