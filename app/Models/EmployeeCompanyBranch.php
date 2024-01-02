<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCompanyBranch
 * 
 * @property int $employee_id
 * @property int $company_branch_id
 * 
 * @property CompanyBranch $company_branch
 * @property Employee $employee
 *
 * @package App\Models
 */
class EmployeeCompanyBranch extends Model
{
	protected $table = 'employee_company_branches';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'employee_id' => 'int',
		'company_branch_id' => 'int'
	];

	protected $fillable = [
		'employee_id',
		'company_branch_id'
	];

	public function company_branch()
	{
		return $this->belongsTo(CompanyBranch::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
