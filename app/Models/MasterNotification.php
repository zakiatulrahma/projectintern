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
 * Class MasterNotification
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $description
 * @property string|null $template
 * @property int $status
 * @property int $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 * @property MasterNotificationVariable $master_notification_variable
 * @property Collection|NotificationCompany[] $notification_companies
 * @property NotificationUser $notification_user
 * @property Collection|Notification[] $notifications
 *
 * @package App\Models
 */
class MasterNotification extends Model
{
	use SoftDeletes;
	protected $table = 'master_notifications';

	protected $casts = [
		'status' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'type',
		'name',
		'description',
		'template',
		'status',
		'created_by'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function master_notification_variable()
	{
		return $this->hasOne(MasterNotificationVariable::class);
	}

	public function notification_companies()
	{
		return $this->hasMany(NotificationCompany::class, 'type', 'type');
	}

	public function notification_user()
	{
		return $this->hasOne(NotificationUser::class);
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}
}
