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
 * Class Calendar
 * 
 * @property int $id
 * @property int|null $company_id
 * @property int $calendar_label_id
 * @property string $title
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $is_allday
 * @property string|null $description
 * @property string|null $event_url
 * @property string|null $location
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CalendarLabel $calendar_label
 * @property Company|null $company
 * @property Collection|Employee[] $employees
 *
 * @package App\Models
 */
class Calendar extends Model
{
	use SoftDeletes;
	protected $table = 'calendars';

	protected $casts = [
		'company_id' => 'int',
		'calendar_label_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'is_allday' => 'int'
	];

	protected $fillable = [
		'company_id',
		'calendar_label_id',
		'title',
		'start_date',
		'end_date',
		'is_allday',
		'description',
		'event_url',
		'location'
	];

	public function calendar_label()
	{
		return $this->belongsTo(CalendarLabel::class);
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function employees()
	{
		return $this->belongsToMany(Employee::class, 'calendar_employees')
					->withPivot('created_by')
					->withTimestamps();
	}
}
