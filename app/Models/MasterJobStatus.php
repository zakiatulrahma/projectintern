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
 * Class MasterJobStatus
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class MasterJobStatus extends Model
{
	use SoftDeletes;
	protected $table = 'master_job_statuses';

	protected $fillable = [
		'name'
	];

	public function employees()
	{
		return $this->hasMany(Employee::class, 'job_status_id');
	}
}
