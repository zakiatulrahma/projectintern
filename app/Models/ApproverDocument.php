<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApproverDocument
 * 
 * @property int $id
 * @property int $document_id
 * @property int $employee_id
 * @property int $step
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Document $document
 * @property Employee $employee
 *
 * @package App\Models
 */
class ApproverDocument extends Model
{
	protected $table = 'approver_documents';

	protected $casts = [
		'document_id' => 'int',
		'employee_id' => 'int',
		'step' => 'int'
	];

	protected $fillable = [
		'document_id',
		'employee_id',
		'step',
		'status'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}
}
