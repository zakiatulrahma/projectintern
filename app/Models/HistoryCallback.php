<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistoryCallback
 * 
 * @property int $id
 * @property int $callback_id
 * @property int $status
 * @property string $payload
 * @property string $reponse
 * @property string $request_time
 * @property string $response_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class HistoryCallback extends Model
{
	protected $table = 'history_callbacks';

	protected $casts = [
		'callback_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'callback_id',
		'status',
		'payload',
		'reponse',
		'request_time',
		'response_time'
	];
}
