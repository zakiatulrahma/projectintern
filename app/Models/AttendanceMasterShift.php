<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AttendanceMasterShift
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property Carbon|null $start_working_time
 * @property Carbon|null $end_working_time
 * @property Carbon|null $start_break_time
 * @property Carbon|null $end_break_time
 * @property Carbon|null $over_time_before
 * @property Carbon|null $over_time_after
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property AttendanceShiftDetail $attendance_shift_detail
 * @property Collection|AttendanceShift[] $attendance_shifts
 *
 * @package App\Models
 */
class AttendanceMasterShift extends Model
{
	use SoftDeletes;
	protected $table = 'attendance_master_shifts';

	protected $casts = [
		'company_id' => 'int',
		'start_working_time' => 'datetime',
		'end_working_time' => 'datetime',
		'start_break_time' => 'datetime',
		'end_break_time' => 'datetime',
		'over_time_before' => 'datetime',
		'over_time_after' => 'datetime'
	];

	protected $fillable = [
		'company_id',
		'name',
		'start_working_time',
		'end_working_time',
		'start_break_time',
		'end_break_time',
		'over_time_before',
		'over_time_after'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function attendance_shift_detail()
	{
		return $this->hasOne(AttendanceShiftDetail::class);
	}

	public function attendance_shifts()
	{
		return $this->hasMany(AttendanceShift::class);
	}
}
