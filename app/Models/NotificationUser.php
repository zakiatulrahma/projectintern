<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NotificationUser
 * 
 * @property int $master_notification_id
 * @property int $user_id
 * 
 * @property MasterNotification $master_notification
 * @property User $user
 *
 * @package App\Models
 */
class NotificationUser extends Model
{
	protected $table = 'notification_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'master_notification_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'master_notification_id',
		'user_id'
	];

	public function master_notification()
	{
		return $this->belongsTo(MasterNotification::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
