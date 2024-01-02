<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoordinateSign
 * 
 * @property int $id
 * @property int $list_signer_id
 * @property int $llx
 * @property int $lly
 * @property int $urx
 * @property int $ury
 * @property int $page
 * @property string $location
 * @property string $reason
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ListSigner $list_signer
 *
 * @package App\Models
 */
class CoordinateSign extends Model
{
	protected $table = 'coordinate_signs';

	protected $casts = [
		'list_signer_id' => 'int',
		'llx' => 'int',
		'lly' => 'int',
		'urx' => 'int',
		'ury' => 'int',
		'page' => 'int'
	];

	protected $fillable = [
		'list_signer_id',
		'llx',
		'lly',
		'urx',
		'ury',
		'page',
		'location',
		'reason'
	];

	public function list_signer()
	{
		return $this->belongsTo(ListSigner::class);
	}
}
