<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 * 
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Company $company
 * @property Collection|GroupMember[] $group_members
 *
 * @package App\Models
 */
class Group extends Model
{
	protected $table = 'groups';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'name',
		'status'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function group_members()
	{
		return $this->hasMany(GroupMember::class);
	}
}
