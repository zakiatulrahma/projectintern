<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NotificationView
 * 
 * @property int $id
 * @property int $notification_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Notification $notification
 * @property User $user
 *
 * @package App\Models
 */
class NotificationView extends Model
{
	protected $table = 'notification_views';

	protected $casts = [
		'notification_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'notification_id',
		'user_id'
	];

	public function notification()
	{
		return $this->belongsTo(Notification::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
