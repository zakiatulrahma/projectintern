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
 * Class User
 * 
 * @property int $id
 * @property int|null $company_id
 * @property int|null $employee_id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $role
 * @property string|null $remember_token
 * @property string $lang
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company|null $company
 * @property Employee|null $employee
 * @property Collection|DeviceToken[] $device_tokens
 * @property Collection|MasterNotification[] $master_notifications
 * @property NotificationArchiveAll $notification_archive_all
 * @property Collection|NotificationArchive[] $notification_archives
 * @property Collection|NotificationCompany[] $notification_companies
 * @property NotificationUser $notification_user
 * @property NotificationViewAll $notification_view_all
 * @property Collection|NotificationView[] $notification_views
 * @property Collection|Notification[] $notifications
 * @property Collection|UserToken[] $user_tokens
 *
 * @package App\Models
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'company_id' => 'int',
		'employee_id' => 'int',
		'email_verified_at' => 'datetime',
		'status' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'company_id',
		'employee_id',
		'name',
		'email',
		'email_verified_at',
		'password',
		'role',
		'remember_token',
		'lang',
		'status'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function device_tokens()
	{
		return $this->hasMany(DeviceToken::class);
	}

	public function master_notifications()
	{
		return $this->hasMany(MasterNotification::class, 'created_by');
	}

	public function notification_archive_all()
	{
		return $this->hasOne(NotificationArchiveAll::class);
	}

	public function notification_archives()
	{
		return $this->hasMany(NotificationArchive::class);
	}

	public function notification_companies()
	{
		return $this->hasMany(NotificationCompany::class, 'created_by');
	}

	public function notification_user()
	{
		return $this->hasOne(NotificationUser::class);
	}

	public function notification_view_all()
	{
		return $this->hasOne(NotificationViewAll::class);
	}

	public function notification_views()
	{
		return $this->hasMany(NotificationView::class);
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function user_tokens()
	{
		return $this->hasMany(UserToken::class);
	}
}
