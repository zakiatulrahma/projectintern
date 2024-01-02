<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupMember
 * 
 * @property int $id
 * @property int $group_id
 * @property int $employee_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Employee $employee
 * @property Group $group
 *
 * @package App\Models
 */
class GroupMember extends Model
{
	protected $table = 'group_members';

	protected $casts = [
		'group_id' => 'int',
		'employee_id' => 'int'
	];

	protected $fillable = [
		'group_id',
		'employee_id'
	];

	public function employee()
	{
		return $this->belongsTo(Employee::class);
	}

	public function group()
	{
		return $this->belongsTo(Group::class);
	}
}
