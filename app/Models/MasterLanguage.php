<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MasterLanguage
 * 
 * @property int $id
 * @property string $lang
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class MasterLanguage extends Model
{
	use SoftDeletes;
	protected $table = 'master_languages';

	protected $fillable = [
		'lang',
		'name'
	];
}
