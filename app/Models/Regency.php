<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Regency
 * 
 * @property int $id
 * @property int $province_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Regency extends Model
{
	protected $table = 'regencies';

	protected $casts = [
		'province_id' => 'int'
	];

	protected $fillable = [
		'province_id',
		'name'
	];
}
