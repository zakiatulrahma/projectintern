<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CalendarEmployee
 * 
 * @property int $created_by
 * @property int $employee_id
 * @property int $calendar_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Calendar $calendar
 * @property Employee $employee
 *
 * @package App\Models
 */
class CalendarEmployee extends Model
{
	protected $table = 'calendar_employees';
	public $incrementing = false;

	protected $casts = [
		'created_by' => 'int',
		'employee_id' => 'int',
		'calendar_id' => 'int'
	];

	protected $fillable = [
		'created_by',
		'employee_id',
		'calendar_id'
	];

	public function calendar()
	{
		return $this->belongsTo(Calendar::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
