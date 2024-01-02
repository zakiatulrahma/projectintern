<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ListAdapter
 * 
 * @property int $id
 * @property string $url
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ListAdapter extends Model
{
	protected $table = 'list_adapters';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'url',
		'status'
	];
}
