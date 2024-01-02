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
 * Class JobPosition
 * 
 * @property int $id
 * @property int $company_id
 * @property int|null $parent_id
 * @property string $name
 * @property string|null $alias
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property JobPosition|null $job_position
 * @property Collection|Employee[] $employees
 * @property Collection|JobPosition[] $job_positions
 * @property Collection|RecipientDocument[] $recipient_documents
 *
 * @package App\Models
 */
class JobPosition extends Model
{
	use SoftDeletes;
	protected $table = 'job_positions';

	protected $casts = [
		'company_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'parent_id',
		'name',
		'alias'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function job_position()
	{
		return $this->belongsTo(JobPosition::class, 'parent_id');
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}

	public function job_positions()
	{
		return $this->hasMany(JobPosition::class, 'parent_id');
	}

	public function recipient_documents()
	{
		return $this->hasMany(RecipientDocument::class);
	}
}
