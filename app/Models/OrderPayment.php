<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderPayment
 * 
 * @property int $id
 * @property int $metode_pembayaran_id
 * @property int $payment3rd_detail_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property MetodePembayaran $metode_pembayaran
 * @property Payment3rdDetail $payment3rd_detail
 *
 * @package App\Models
 */
class OrderPayment extends Model
{
	use SoftDeletes;
	protected $table = 'order_payments';

	protected $casts = [
		'metode_pembayaran_id' => 'int',
		'payment3rd_detail_id' => 'int'
	];

	protected $fillable = [
		'metode_pembayaran_id',
		'payment3rd_detail_id'
	];

	public function metode_pembayaran()
	{
		return $this->belongsTo(MetodePembayaran::class);
	}

	public function payment3rd_detail()
	{
		return $this->belongsTo(Payment3rdDetail::class);
	}
}
