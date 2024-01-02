<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Overtime
 * 
 * @property int $id
 * @property int $employee_id
 * @property int|null $approval_id
 * @property Carbon $date
 * @property string $notes
 * @property string $file
 * @property string $overtime_type
 * @property Carbon|null $before_working_start
 * @property Carbon|null $before_working_end
 * @property Carbon|null $after_working_start
 * @property Carbon|null $after_working_end
 * @property float $taken
 * @property int $status
 * @property Carbon|null $approved_time
 * @property Carbon|null $is_cancel
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Approval|null $approval
 * @property Employee $employee
 * @property Collection|Attendance[] $attendances
 *
 * @package App\Models
 */
class Overtime extends Model
{
	protected $table = 'overtimes';

	protected $casts = [
		'employee_id' => 'int',
		'approval_id' => 'int',
		'date' => 'datetime',
		'before_working_start' => 'datetime',
		'before_working_end' => 'datetime',
		'after_working_start' => 'datetime',
		'after_working_end' => 'datetime',
		'taken' => 'float',
		'status' => 'int',
		'approved_time' => 'datetime',
		'is_cancel' => 'datetime'
	];

	protected $fillable = [
		'employee_id',
		'approval_id',
		'date',
		'notes',
		'file',
		'overtime_type',
		'before_working_start',
		'before_working_end',
		'after_working_start',
		'after_working_end',
		'taken',
		'status',
		'approved_time',
		'is_cancel'
	];

	public function approval()
	{
		return $this->belongsTo(Approval::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}
}
