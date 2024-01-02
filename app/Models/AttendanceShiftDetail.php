<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttendanceShiftDetail
 * 
 * @property int $attendance_shift_id
 * @property int $attendance_master_shift_id
 * @property int $order
 * 
 * @property AttendanceMasterShift $attendance_master_shift
 * @property AttendanceShift $attendance_shift
 *
 * @package App\Models
 */
class AttendanceShiftDetail extends Model
{
	protected $table = 'attendance_shift_details';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'attendance_shift_id' => 'int',
		'attendance_master_shift_id' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'attendance_shift_id',
		'attendance_master_shift_id',
		'order'
	];

	public function attendance_master_shift()
	{
		return $this->belongsTo(AttendanceMasterShift::class);
	}

	public function attendance_shift()
	{
		return $this->belongsTo(AttendanceShift::class);
	}
}
