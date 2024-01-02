<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MasterNotificationVariable
 * 
 * @property int $master_notification_id
 * @property string $name
 * 
 * @property MasterNotification $master_notification
 *
 * @package App\Models
 */
class MasterNotificationVariable extends Model
{
	protected $table = 'master_notification_variables';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'master_notification_id' => 'int'
	];

	protected $fillable = [
		'master_notification_id',
		'name'
	];

	public function master_notification()
	{
		return $this->belongsTo(MasterNotification::class);
	}
}
