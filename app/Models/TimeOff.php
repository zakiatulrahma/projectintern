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
 * Class TimeOff
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $master_time_off_company_id
 * @property int|null $approval_id
 * @property int|null $delegate_to
 * @property int $is_half_day
 * @property string $name
 * @property string $code
 * @property string|null $half_day_type
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * @property string $notes
 * @property float $taken
 * @property string $file
 * @property int $status
 * @property Carbon|null $approved_time
 * @property Carbon|null $is_cancel
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Approval|null $approval
 * @property Employee $employee
 * @property MasterTimeOffCompany $master_time_off_company
 * @property Collection|Attendance[] $attendances
 *
 * @package App\Models
 */
class TimeOff extends Model
{
	use SoftDeletes;
	protected $table = 'time_offs';

	protected $casts = [
		'employee_id' => 'int',
		'master_time_off_company_id' => 'int',
		'approval_id' => 'int',
		'delegate_to' => 'int',
		'is_half_day' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'taken' => 'float',
		'status' => 'int',
		'approved_time' => 'datetime',
		'is_cancel' => 'datetime'
	];

	protected $fillable = [
		'employee_id',
		'master_time_off_company_id',
		'approval_id',
		'delegate_to',
		'is_half_day',
		'name',
		'code',
		'half_day_type',
		'start_date',
		'end_date',
		'notes',
		'taken',
		'file',
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

	public function master_time_off_company()
	{
		return $this->belongsTo(MasterTimeOffCompany::class);
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}
}
