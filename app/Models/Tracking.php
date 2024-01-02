<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tracking
 * 
 * @property int $id
 * @property int $document_id
 * @property int $employee_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tracking extends Model
{
	protected $table = 'tracking';

	protected $casts = [
		'document_id' => 'int',
		'employee_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'employee_id'
	];
}
