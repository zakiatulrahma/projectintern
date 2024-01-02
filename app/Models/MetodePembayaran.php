<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MetodePembayaran
 * 
 * @property int $id
 * @property int $payment3rd_detail_id
 * @property int $direct
 * @property string $name
 * @property string|null $logo
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Payment3rdDetail $payment3rd_detail
 * @property Collection|OrderPayment[] $order_payments
 *
 * @package App\Models
 */
class MetodePembayaran extends Model
{
	use SoftDeletes;
	protected $table = 'metode_pembayarans';

	protected $casts = [
		'payment3rd_detail_id' => 'int',
		'direct' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'payment3rd_detail_id',
		'direct',
		'name',
		'logo',
		'status'
	];

	public function payment3rd_detail()
	{
		return $this->belongsTo(Payment3rdDetail::class);
	}

	public function order_payments()
	{
		return $this->hasMany(OrderPayment::class);
	}
}
