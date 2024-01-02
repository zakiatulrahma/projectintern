<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserToken
 * 
 * @property int $id
 * @property string $device_token
 * @property int $user_id
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserToken extends Model
{
	protected $table = 'user_tokens';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'device_token'
	];

	protected $fillable = [
		'device_token',
		'user_id',
		'type'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
