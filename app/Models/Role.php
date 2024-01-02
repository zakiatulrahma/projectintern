<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property int|null $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Company|null $company
 * @property Collection|Employee[] $employees
 * @property Collection|ModelHasRole[] $model_has_roles
 * @property Collection|Notification[] $notifications
 * @property Collection|Permission[] $permissions
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'name',
		'guard_name',
		'company_id'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function employees()
	{
		return $this->belongsToMany(Employee::class, 'employee_has_roles');
	}

	public function model_has_roles()
	{
		return $this->hasMany(ModelHasRole::class);
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'role_has_permissions');
	}
}
