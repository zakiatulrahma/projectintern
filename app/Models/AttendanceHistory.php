<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AttendanceHistory
 * 
 * @property int $id
 * @property int $employee_id
 * @property string|null $image
 * @property int $status
 * @property float|null $latitude
 * @property float|null $longitude
 * @property Carbon $date
 * @property Carbon|null $time
 * @property string|null $notes
 * @property int|null $attendance_request_id
 * @property int|null $attendance_location_id
 * @property string|null $attendance_location_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property AttendanceLocation|null $attendance_location
 * @property AttendanceRequest|null $attendance_request
 * @property Employee $employee
 *
 * @package App\Models
 */
class AttendanceHistory extends Model
{
	use SoftDeletes;
	protected $table = 'attendance_histories';

	protected $casts = [
		'employee_id' => 'int',
		'status' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'date' => 'datetime',
		'time' => 'datetime',
		'attendance_request_id' => 'int',
		'attendance_location_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'image',
		'status',
		'latitude',
		'longitude',
		'date',
		'time',
		'notes',
		'attendance_request_id',
		'attendance_location_id',
		'attendance_location_name'
	];

	public function attendance_location()
	{
		return $this->belongsTo(AttendanceLocation::class);
	}

	public function attendance_request()
	{
		return $this->belongsTo(AttendanceRequest::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
