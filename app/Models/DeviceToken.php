<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DeviceToken
 * 
 * @property int $id
 * @property int $user_id
 * @property string $device_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class DeviceToken extends Model
{
	use SoftDeletes;
	protected $table = 'device_tokens';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'device_token'
	];

	protected $fillable = [
		'user_id',
		'device_token'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
