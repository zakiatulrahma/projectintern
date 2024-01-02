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
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $name_pic
 * @property string|null $logo
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $province
 * @property string|null $city
 * @property Carbon|null $contract_start
 * @property Carbon|null $contract_end
 * @property int|null $company_id
 * @property string|null $prefix
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company|null $company
 * @property Collection|ApprovalCompany[] $approval_companies
 * @property Collection|ApprovalRequester[] $approval_requesters
 * @property Collection|Approval[] $approvals
 * @property Collection|AttendanceLocation[] $attendance_locations
 * @property Collection|AttendanceMasterSchedule[] $attendance_master_schedules
 * @property Collection|AttendanceMasterShift[] $attendance_master_shifts
 * @property Collection|AttendanceShift[] $attendance_shifts
 * @property Collection|CalendarLabel[] $calendar_labels
 * @property Collection|Calendar[] $calendars
 * @property Collection|Company[] $companies
 * @property Collection|CompanyBranch[] $company_branches
 * @property Collection|Department[] $departments
 * @property Collection|Directorate[] $directorates
 * @property Collection|Division[] $divisions
 * @property Collection|Employee[] $employees
 * @property Collection|Group[] $groups
 * @property Collection|JobPosition[] $job_positions
 * @property Collection|MasterHolidayCompany[] $master_holiday_companies
 * @property Collection|MasterTimeOffCompany[] $master_time_off_companies
 * @property Collection|MenuCompany[] $menu_companies
 * @property Collection|NotificationCompany[] $notification_companies
 * @property Collection|Notification[] $notifications
 * @property Collection|Role[] $roles
 * @property Collection|StructureOrganization[] $structure_organizations
 * @property Collection|TimeOffMigration[] $time_off_migrations
 * @property Collection|UsageHistory[] $usage_histories
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Company extends Model
{
	use SoftDeletes;
	protected $table = 'companies';

	protected $casts = [
		'contract_start' => 'datetime',
		'contract_end' => 'datetime',
		'company_id' => 'int'
	];

	protected $fillable = [
		'name',
		'email',
		'name_pic',
		'logo',
		'address',
		'phone',
		'province',
		'city',
		'contract_start',
		'contract_end',
		'company_id',
		'prefix'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function approval_companies()
	{
		return $this->hasMany(ApprovalCompany::class);
	}

	public function approval_requesters()
	{
		return $this->hasMany(ApprovalRequester::class);
	}

	public function approvals()
	{
		return $this->hasMany(Approval::class);
	}

	public function attendance_locations()
	{
		return $this->hasMany(AttendanceLocation::class);
	}

	public function attendance_master_schedules()
	{
		return $this->hasMany(AttendanceMasterSchedule::class);
	}

	public function attendance_master_shifts()
	{
		return $this->hasMany(AttendanceMasterShift::class);
	}

	public function attendance_shifts()
	{
		return $this->hasMany(AttendanceShift::class);
	}

	public function calendar_labels()
	{
		return $this->hasMany(CalendarLabel::class);
	}

	public function calendars()
	{
		return $this->hasMany(Calendar::class);
	}

	public function companies()
	{
		return $this->hasMany(Company::class);
	}

	public function company_branches()
	{
		return $this->hasMany(CompanyBranch::class);
	}

	public function departments()
	{
		return $this->hasMany(Department::class);
	}

	public function directorates()
	{
		return $this->hasMany(Directorate::class);
	}

	public function divisions()
	{
		return $this->hasMany(Division::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}

	public function groups()
	{
		return $this->hasMany(Group::class);
	}

	public function job_positions()
	{
		return $this->hasMany(JobPosition::class);
	}

	public function master_holiday_companies()
	{
		return $this->hasMany(MasterHolidayCompany::class);
	}

	public function master_time_off_companies()
	{
		return $this->hasMany(MasterTimeOffCompany::class);
	}

	public function menu_companies()
	{
		return $this->hasMany(MenuCompany::class);
	}

	public function notification_companies()
	{
		return $this->hasMany(NotificationCompany::class);
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function roles()
	{
		return $this->hasMany(Role::class);
	}

	public function structure_organizations()
	{
		return $this->hasMany(StructureOrganization::class);
	}

	public function time_off_migrations()
	{
		return $this->hasMany(TimeOffMigration::class);
	}

	public function usage_histories()
	{
		return $this->hasMany(UsageHistory::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
