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
 * Class Employee
 * 
 * @property int $id
 * @property string|null $nik
 * @property string|null $nik_company
 * @property int $company_id
 * @property int|null $structure_organization_id
 * @property int|null $department_id
 * @property int|null $job_position_id
 * @property int|null $directorate_id
 * @property int|null $division_id
 * @property int $job_status_id
 * @property string $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string|null $image_profile
 * @property string|null $no_ktp
 * @property string $mobile_number
 * @property Carbon|null $join_date
 * @property Carbon $birth_date
 * @property string $place_of_birth
 * @property string $gender
 * @property string|null $emergency_contact
 * @property string|null $emergency_number
 * @property string|null $emergency_relation
 * @property string $address
 * @property int|null $education_id
 * @property string|null $education_school
 * @property string|null $education_faculty
 * @property int|null $marital_status_id
 * @property int|null $number_of_children
 * @property string|null $key_store
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Department|null $department
 * @property Directorate|null $directorate
 * @property Division|null $division
 * @property MasterEducation|null $master_education
 * @property JobPosition|null $job_position
 * @property MasterJobStatus $master_job_status
 * @property MasterMaritalStatus|null $master_marital_status
 * @property StructureOrganization|null $structure_organization
 * @property Collection|ApprovalHistory[] $approval_histories
 * @property Collection|ApprovalNeedMyApproval[] $approval_need_my_approvals
 * @property Collection|Approval[] $approvals
 * @property Collection|ApproverDocument[] $approver_documents
 * @property Collection|AttendanceHistory[] $attendance_histories
 * @property Collection|AttendanceRequest[] $attendance_requests
 * @property Collection|Attendance[] $attendances
 * @property Collection|Calendar[] $calendars
 * @property Collection|Document[] $documents
 * @property Collection|CompanyBranch[] $company_branches
 * @property Collection|Department[] $departments
 * @property Collection|Directorate[] $directorates
 * @property Collection|Division[] $divisions
 * @property Collection|Role[] $roles
 * @property EmployeeHasSchedule $employee_has_schedule
 * @property EmployeeHasTimeOff $employee_has_time_off
 * @property Collection|JobPosition[] $job_positions
 * @property Collection|StructureOrganization[] $structure_organizations
 * @property Collection|GroupMember[] $group_members
 * @property Collection|ListSigner[] $list_signers
 * @property Collection|Overtime[] $overtimes
 * @property Collection|RecipientDocument[] $recipient_documents
 * @property Collection|Speciment[] $speciments
 * @property Collection|TimeOffAdjusment[] $time_off_adjusments
 * @property Collection|TimeOffBalance[] $time_off_balances
 * @property Collection|TimeOffMigration[] $time_off_migrations
 * @property Collection|TimeOff[] $time_offs
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Employee extends Model
{
	use SoftDeletes;
	protected $table = 'employees';

	protected $casts = [
		'company_id' => 'int',
		'structure_organization_id' => 'int',
		'department_id' => 'int',
		'job_position_id' => 'int',
		'directorate_id' => 'int',
		'division_id' => 'int',
		'job_status_id' => 'int',
		'join_date' => 'datetime',
		'birth_date' => 'datetime',
		'education_id' => 'int',
		'marital_status_id' => 'int',
		'number_of_children' => 'int'
	];

	protected $fillable = [
		'nik',
		'nik_company',
		'company_id',
		'structure_organization_id',
		'department_id',
		'job_position_id',
		'directorate_id',
		'division_id',
		'job_status_id',
		'first_name',
		'last_name',
		'email',
		'image_profile',
		'no_ktp',
		'mobile_number',
		'join_date',
		'birth_date',
		'place_of_birth',
		'gender',
		'emergency_contact',
		'emergency_number',
		'emergency_relation',
		'address',
		'education_id',
		'education_school',
		'education_faculty',
		'marital_status_id',
		'number_of_children',
		'key_store'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function directorate()
	{
		return $this->belongsTo(Directorate::class);
	}

	public function division()
	{
		return $this->belongsTo(Division::class);
	}

	public function master_education()
	{
		return $this->belongsTo(MasterEducation::class, 'education_id');
	}

	public function job_position()
	{
		return $this->belongsTo(JobPosition::class);
	}

	public function master_job_status()
	{
		return $this->belongsTo(MasterJobStatus::class, 'job_status_id');
	}

	public function master_marital_status()
	{
		return $this->belongsTo(MasterMaritalStatus::class, 'marital_status_id');
	}

	public function structure_organization()
	{
		return $this->belongsTo(StructureOrganization::class);
	}

	public function approval_histories()
	{
		return $this->hasMany(ApprovalHistory::class);
	}

	public function approval_need_my_approvals()
	{
		return $this->hasMany(ApprovalNeedMyApproval::class);
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}

	public function approver_documents()
	{
		return $this->hasMany(ApproverDocument::class);
	}

	public function attendance_histories()
	{
		return $this->hasMany(AttendanceHistory::class);
	}

	public function attendance_requests()
	{
		return $this->hasMany(AttendanceRequest::class);
	}

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}

	public function calendars()
	{
		return $this->belongsToMany(Calendar::class, 'calendar_employees')
					->withPivot('created_by')
					->withTimestamps();
	}

	public function documents()
	{
		return $this->hasMany(Document::class, 'drafter_id');
	}

	public function company_branches()
	{
		return $this->belongsToMany(CompanyBranch::class, 'employee_company_branches');
	}

	public function departments()
	{
		return $this->belongsToMany(Department::class, 'employee_departments');
	}

	public function directorates()
	{
		return $this->belongsToMany(Directorate::class, 'employee_directorates');
	}

	public function divisions()
	{
		return $this->belongsToMany(Division::class, 'employee_divisions');
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'employee_has_roles');
	}

	public function employee_has_schedule()
	{
		return $this->hasOne(EmployeeHasSchedule::class);
	}

	public function employee_has_time_off()
	{
		return $this->hasOne(EmployeeHasTimeOff::class);
	}

	public function job_positions()
	{
		return $this->belongsToMany(JobPosition::class, 'employee_job_positions')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function structure_organizations()
	{
		return $this->belongsToMany(StructureOrganization::class, 'employee_structure_organizations');
	}

	public function group_members()
	{
		return $this->hasMany(GroupMember::class);
	}

	public function list_signers()
	{
		return $this->hasMany(ListSigner::class);
	}

	public function overtimes()
	{
		return $this->hasMany(Overtime::class);
	}

	public function recipient_documents()
	{
		return $this->hasMany(RecipientDocument::class);
	}

	public function speciments()
	{
		return $this->hasMany(Speciment::class);
	}

	public function time_off_adjusments()
	{
		return $this->hasMany(TimeOffAdjusment::class);
	}

	public function time_off_balances()
	{
		return $this->hasMany(TimeOffBalance::class);
	}

	public function time_off_migrations()
	{
		return $this->hasMany(TimeOffMigration::class, 'created_by');
	}

	public function time_offs()
	{
		return $this->hasMany(TimeOff::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
