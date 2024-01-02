<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NotificationCompany
 * 
 * @property int $id
 * @property string $type
 * @property int|null $master_notification_id
 * @property int $company_id
 * @property string $name
 * @property string $description
 * @property string|null $template
 * @property int $status
 * @property int $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Company $company
 * @property User $user
 * @property MasterNotification $master_notification
 *
 * @package App\Models
 */
class NotificationCompany extends Model
{
	protected $table = 'notification_companies';

	protected $casts = [
		'master_notification_id' => 'int',
		'company_id' => 'int',
		'status' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'type',
		'master_notification_id',
		'company_id',
		'name',
		'description',
		'template',
		'status',
		'created_by'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function master_notification()
	{
		return $this->belongsTo(MasterNotification::class, 'type', 'type');
	}
}
