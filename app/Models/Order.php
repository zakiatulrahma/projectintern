<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $user_registration_id
 * @property int $status_payment
 * @property float $harga
 * @property float $harga_total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property UserRegistration $user_registration
 * @property Collection|OrderDetail[] $order_details
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_registration_id' => 'int',
		'status_payment' => 'int',
		'harga' => 'float',
		'harga_total' => 'float'
	];

	protected $fillable = [
		'user_registration_id',
		'status_payment',
		'harga',
		'harga_total'
	];

	public function user_registration()
	{
		return $this->belongsTo(UserRegistration::class);
	}

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}
}
