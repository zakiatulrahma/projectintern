<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CalendarLabel
 * 
 * @property int $id
 * @property int|null $company_id
 * @property string $name
 * @property string $color
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company|null $company
 * @property Collection|Calendar[] $calendars
 *
 * @package App\Models
 */
class CalendarLabel extends Model
{
	use SoftDeletes;
	protected $table = 'calendar_labels';

	protected $casts = [
		'company_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'name',
		'color'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function calendars()
	{
		return $this->hasMany(Calendar::class);
	}
}
