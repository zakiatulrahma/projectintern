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
 * Class Notification
 * 
 * @property int $id
 * @property int|null $company_id
 * @property int|null $master_notification_id
 * @property int|null $created_by
 * @property string $title
 * @property string $isi
 * @property string|null $foto
 * @property string|null $link
 * @property int|null $user_id
 * @property int|null $role_id
 * @property Carbon|null $active_date
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string $type
 * @property int|null $id_update
 * 
 * @property Company|null $company
 * @property User|null $user
 * @property MasterNotification|null $master_notification
 * @property Role|null $role
 * @property Collection|NotificationArchive[] $notification_archives
 * @property Collection|NotificationView[] $notification_views
 *
 * @package App\Models
 */
class Notification extends Model
{
	use SoftDeletes;
	protected $table = 'notifications';

	protected $casts = [
		'company_id' => 'int',
		'master_notification_id' => 'int',
		'created_by' => 'int',
		'user_id' => 'int',
		'role_id' => 'int',
		'active_date' => 'datetime',
		'status' => 'int',
		'id_update' => 'int'
	];

	protected $fillable = [
		'company_id',
		'master_notification_id',
		'created_by',
		'title',
		'isi',
		'foto',
		'link',
		'user_id',
		'role_id',
		'active_date',
		'status',
		'type',
		'id_update'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function master_notification()
	{
		return $this->belongsTo(MasterNotification::class);
	}

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function notification_archives()
	{
		return $this->hasMany(NotificationArchive::class);
	}

	public function notification_views()
	{
		return $this->hasMany(NotificationView::class);
	}
}
