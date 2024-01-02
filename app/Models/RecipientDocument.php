<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecipientDocument
 * 
 * @property int $id
 * @property int $document_id
 * @property int|null $job_position_id
 * @property int|null $employee_id
 * @property string $status
 * @property Carbon|null $read_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Document $document
 * @property Employee|null $employee
 * @property JobPosition|null $job_position
 *
 * @package App\Models
 */
class RecipientDocument extends Model
{
	protected $table = 'recipient_documents';

	protected $casts = [
		'document_id' => 'int',
		'job_position_id' => 'int',
		'employee_id' => 'int',
		'read_at' => 'datetime'
	];

	protected $fillable = [
		'document_id',
		'job_position_id',
		'employee_id',
		'status',
		'read_at'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function job_position()
	{
		return $this->belongsTo(JobPosition::class);
	}
}
