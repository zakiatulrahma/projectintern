<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 * 
 * @property int $id
 * @property string $filename
 * @property string $realname
 * @property string $subject
 * @property string $no_document
 * @property int $drafter_id
 * @property string $type
 * @property string $priority
 * @property string $clasification
 * @property string $status
 * @property int $step
 * @property Carbon|null $finish_date
 * @property string $type_sign
 * @property string|null $doc_sign
 * @property string|null $doc_draft
 * @property string|null $bulk_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Employee $employee
 * @property Collection|ApproverDocument[] $approver_documents
 * @property Collection|HistoryDocument[] $history_documents
 * @property Collection|ListSigner[] $list_signers
 * @property Collection|RecipientDocument[] $recipient_documents
 *
 * @package App\Models
 */
class Document extends Model
{
	protected $table = 'documents';

	protected $casts = [
		'drafter_id' => 'int',
		'step' => 'int',
		'finish_date' => 'datetime'
	];

	protected $fillable = [
		'filename',
		'realname',
		'subject',
		'no_document',
		'drafter_id',
		'type',
		'priority',
		'clasification',
		'status',
		'step',
		'finish_date',
		'type_sign',
		'doc_sign',
		'doc_draft',
		'bulk_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'drafter_id');
	}

	public function approver_documents()
	{
		return $this->hasMany(ApproverDocument::class);
	}

	public function history_documents()
	{
		return $this->hasMany(HistoryDocument::class);
	}

	public function list_signers()
	{
		return $this->hasMany(ListSigner::class);
	}

	public function recipient_documents()
	{
		return $this->hasMany(RecipientDocument::class);
	}
}
