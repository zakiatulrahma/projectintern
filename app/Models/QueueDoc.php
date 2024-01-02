<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QueueDoc
 * 
 * @property int $id
 * @property int $document_id
 * @property int $adapter_id
 * @property int $employee_id
 * @property int $status
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class QueueDoc extends Model
{
	protected $table = 'queue_docs';

	protected $casts = [
		'document_id' => 'int',
		'adapter_id' => 'int',
		'employee_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'document_id',
		'adapter_id',
		'employee_id',
		'status',
		'description'
	];
}
