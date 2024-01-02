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
 * Class TimeOffMigration
 * 
 * @property int $id
 * @property int $company_id
 * @property int $master_time_off_company_id
 * @property string|null $policy_type
 * @property int|null $created_by
 * @property int|null $tahun
 * @property int|null $bulan
 * @property string|null $notes
 * @property string $file
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Company $company
 * @property Employee|null $employee
 * @property MasterTimeOffCompany $master_time_off_company
 * @property Collection|TimeOffAdjusment[] $time_off_adjusments
 *
 * @package App\Models
 */
class TimeOffMigration extends Model
{
	use SoftDeletes;
	protected $table = 'time_off_migrations';

	protected $casts = [
		'company_id' => 'int',
		'master_time_off_company_id' => 'int',
		'created_by' => 'int',
		'tahun' => 'int',
		'bulan' => 'int'
	];

	protected $fillable = [
		'company_id',
		'master_time_off_company_id',
		'policy_type',
		'created_by',
		'tahun',
		'bulan',
		'notes',
		'file'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'created_by');
	}

	public function master_time_off_company()
	{
		return $this->belongsTo(MasterTimeOffCompany::class);
	}

	public function time_off_adjusments()
	{
		return $this->hasMany(TimeOffAdjusment::class);
	}
}
