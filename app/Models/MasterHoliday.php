<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MasterHoliday
 * 
 * @property int $id
 * @property string $name
 * @property string|null $code
 * @property Carbon $date
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class MasterHoliday extends Model
{
	use SoftDeletes;
	protected $table = 'master_holidays';

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'name',
		'code',
		'date',
		'description'
	];
}
