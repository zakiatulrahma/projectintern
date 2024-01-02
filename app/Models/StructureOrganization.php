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
 * Class StructureOrganization
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $parent_id
 * 
 * @property Company $company
 * @property StructureOrganization|null $structure_organization
 * @property Collection|Employee[] $employees
 * @property Collection|StructureOrganization[] $structure_organizations
 *
 * @package App\Models
 */
class StructureOrganization extends Model
{
	use SoftDeletes;
	protected $table = 'structure_organizations';

	protected $casts = [
		'company_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'name',
		'parent_id'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function structure_organization()
	{
		return $this->belongsTo(StructureOrganization::class, 'parent_id');
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}

	public function structure_organizations()
	{
		return $this->hasMany(StructureOrganization::class, 'parent_id');
	}
}
