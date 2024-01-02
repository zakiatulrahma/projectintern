<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TimeOffAdjusment
 * 
 * @property int $id
 * @property int $employee_id
 * @property int $time_off_migration_id
 * @property float $balance
 * @property Carbon $effective_date
 * @property int|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Employee $employee
 * @property TimeOffMigration $time_off_migration
 *
 * @package App\Models
 */
class TimeOffAdjusment extends Model
{
	protected $table = 'time_off_adjusments';

	protected $casts = [
		'employee_id' => 'int',
		'time_off_migration_id' => 'int',
		'balance' => 'float',
		'effective_date' => 'datetime',
		'status' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'time_off_migration_id',
		'balance',
		'effective_date',
		'status'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function time_off_migration()
	{
		return $this->belongsTo(TimeOffMigration::class);
	}
}
