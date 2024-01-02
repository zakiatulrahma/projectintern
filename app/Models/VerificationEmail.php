<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VerificationEmail
 * 
 * @property int $id
 * @property int $user_id
 * @property string $link
 * @property Carbon $expired
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class VerificationEmail extends Model
{
	protected $table = 'verification_email';

	protected $casts = [
		'user_id' => 'int',
		'expired' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'link',
		'expired'
	];
}
