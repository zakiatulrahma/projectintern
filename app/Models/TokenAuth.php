<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TokenAuth
 * 
 * @property int $id
 * @property string|null $name
 * @property string $token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TokenAuth extends Model
{
	protected $table = 'token_auth';

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'name',
		'token'
	];
}
