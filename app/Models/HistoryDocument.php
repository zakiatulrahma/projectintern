<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistoryDocument
 * 
 * @property int $id
 * @property int $document_id
 * @property string $employee_name
 * @property string $action
 * @property string|null $note
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Document $document
 *
 * @package App\Models
 */
class HistoryDocument extends Model
{
	protected $table = 'history_documents';

	protected $casts = [
		'document_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'employee_name',
		'action',
		'note'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}
}
