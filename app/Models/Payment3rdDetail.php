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
 * Class Payment3rdDetail
 * 
 * @property int $id
 * @property int $payment3rd_id
 * @property string $name
 * @property string $code
 * @property int|null $rekening_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Payment3rd $payment3rd
 * @property Rekening|null $rekening
 * @property Collection|MetodePembayaran[] $metode_pembayarans
 * @property Collection|OrderPayment[] $order_payments
 *
 * @package App\Models
 */
class Payment3rdDetail extends Model
{
	use SoftDeletes;
	protected $table = 'payment3rd_details';

	protected $casts = [
		'payment3rd_id' => 'int',
		'rekening_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'payment3rd_id',
		'name',
		'code',
		'rekening_id',
		'status'
	];

	public function payment3rd()
	{
		return $this->belongsTo(Payment3rd::class);
	}

	public function rekening()
	{
		return $this->belongsTo(Rekening::class);
	}

	public function metode_pembayarans()
	{
		return $this->hasMany(MetodePembayaran::class);
	}

	public function order_payments()
	{
		return $this->hasMany(OrderPayment::class);
	}
}
