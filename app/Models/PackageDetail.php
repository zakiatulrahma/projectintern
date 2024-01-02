<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PackageDetail
 * 
 * @property int $package_id
 * @property string $name
 * @property int $feature_status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Package $package
 *
 * @package App\Models
 */
class PackageDetail extends Model
{
	use SoftDeletes;
	protected $table = 'package_details';
	public $incrementing = false;

	protected $casts = [
		'package_id' => 'int',
		'feature_status' => 'int'
	];

	protected $fillable = [
		'package_id',
		'name',
		'feature_status'
	];

	public function package()
	{
		return $this->belongsTo(Package::class);
	}
}
