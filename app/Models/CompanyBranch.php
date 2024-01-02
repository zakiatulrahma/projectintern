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
 * Class CompanyBranch
 * 
 * @property int $id
 * @property int $company_id
 * @property int|null $parent_id
 * @property string $name
 * @property string|null $address
 * @property string|null $province
 * @property string|null $city
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property CompanyBranch|null $company_branch
 * @property Collection|CompanyBranch[] $company_branches
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class CompanyBranch extends Model
{
	use SoftDeletes;
	protected $table = 'company_branches';

	protected $casts = [
		'company_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'parent_id',
		'name',
		'address',
		'province',
		'city'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function company_branch()
	{
		return $this->belongsTo(CompanyBranch::class, 'parent_id');
	}

	public function company_branches()
	{
		return $this->hasMany(CompanyBranch::class, 'parent_id');
	}

	public function employees()
	{
		return $this->belongsToMany(Employee::class, 'employee_company_branches');
	}
}
