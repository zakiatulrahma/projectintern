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
 * Class Payment3rd
 * 
 * @property int $id
 * @property string $name
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Payment3rdDetail[] $payment3rd_details
 *
 * @package App\Models
 */
class Payment3rd extends Model
{
	use SoftDeletes;
	protected $table = 'payment3rds';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'status'
	];

	public function payment3rd_details()
	{
		return $this->hasMany(Payment3rdDetail::class);
	}
}
