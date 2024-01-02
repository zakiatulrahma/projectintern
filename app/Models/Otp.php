<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Otp
 * 
 * @property int $id
 * @property string $identifier
 * @property string $token
 * @property int $validity
 * @property bool $expired
 * @property int $no_times_generated
 * @property int $no_times_attempted
 * @property Carbon $generated_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Otp extends Model
{
	protected $table = 'otps';

	protected $casts = [
		'validity' => 'int',
		'expired' => 'bool',
		'no_times_generated' => 'int',
		'no_times_attempted' => 'int',
		'generated_at' => 'datetime'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'identifier',
		'token',
		'validity',
		'expired',
		'no_times_generated',
		'no_times_attempted',
		'generated_at'
	];
}
