<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TmpConf
 * 
 * @property int $id
 * @property int|null $document_id
 * @property string|null $bulk_id
 * @property int $employee_id
 * @property int $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TmpConf extends Model
{
	protected $table = 'tmp_conf';

	protected $casts = [
		'document_id' => 'int',
		'employee_id' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'document_id',
		'bulk_id',
		'employee_id',
		'type'
	];
}
