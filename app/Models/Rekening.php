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
 * Class Rekening
 * 
 * @property int $id
 * @property int $bank_id
 * @property string $no_rekening
 * @property string $atas_nama
 * @property string $kode
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Bank $bank
 * @property Collection|Payment3rdDetail[] $payment3rd_details
 *
 * @package App\Models
 */
class Rekening extends Model
{
	use SoftDeletes;
	protected $table = 'rekenings';

	protected $casts = [
		'bank_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'bank_id',
		'no_rekening',
		'atas_nama',
		'kode',
		'status'
	];

	public function bank()
	{
		return $this->belongsTo(Bank::class);
	}

	public function payment3rd_details()
	{
		return $this->hasMany(Payment3rdDetail::class);
	}
}
