<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property int $order_id
 * @property float $harga
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Order $order
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	use SoftDeletes;
	protected $table = 'order_details';

	protected $casts = [
		'order_id' => 'int',
		'harga' => 'float'
	];

	protected $fillable = [
		'order_id',
		'harga'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
