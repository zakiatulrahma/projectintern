<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceReportDaily
 * 
 * @property int $id
 * @property Carbon $date
 * @property int $no_checkin
 * @property int $time_off
 * @property int $absent
 * @property int $late_in
 * @property int $on_time
 * @property int $early_out
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class AttendanceReportDaily extends Model
{
	protected $table = 'attendance_report_dailies';

	protected $casts = [
		'date' => 'datetime',
		'no_checkin' => 'int',
		'time_off' => 'int',
		'absent' => 'int',
		'late_in' => 'int',
		'on_time' => 'int',
		'early_out' => 'int'
	];

	protected $fillable = [
		'date',
		'no_checkin',
		'time_off',
		'absent',
		'late_in',
		'on_time',
		'early_out'
	];
}
