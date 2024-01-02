<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeStructureOrganization
 * 
 * @property int $employee_id
 * @property int $structure_organization_id
 * 
 * @property Employee $employee
 * @property StructureOrganization $structure_organization
 *
 * @package App\Models
 */
class EmployeeStructureOrganization extends Model
{
	protected $table = 'employee_structure_organizations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int',
		'structure_organization_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'structure_organization_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function structure_organization()
	{
		return $this->belongsTo(StructureOrganization::class);
	}
}
