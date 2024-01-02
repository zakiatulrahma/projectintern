<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Speciment
 * 
 * @property int $id
 * @property int $employee_id
 * @property string $type
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $speciment
 * 
 * @property Employee $employee
 *
 * @package App\Models
 */
class Speciment extends Model
{
	protected $table = 'speciments';

	protected $casts = [
		'employee_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'type',
		'status',
		'speciment'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
