<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ListSigner
 * 
 * @property int $id
 * @property int $document_id
 * @property int $employee_id
 * @property string $status
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Document $document
 * @property Employee $employee
 * @property Collection|CoordinateSign[] $coordinate_signs
 *
 * @package App\Models
 */
class ListSigner extends Model
{
	protected $table = 'list_signers';

	protected $casts = [
		'document_id' => 'int',
		'employee_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'employee_id',
		'status',
		'description'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function coordinate_signs()
	{
		return $this->hasMany(CoordinateSign::class);
	}
}
