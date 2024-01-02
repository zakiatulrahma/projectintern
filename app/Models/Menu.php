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
 * Class Menu
 * 
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string $path
 * @property int $order
 * @property int|null $parent_id
 * @property int $status_sort
 * @property int $status
 * @property int $for_administrator
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Menu|null $menu
 * @property Collection|MenuCompany[] $menu_companies
 * @property Collection|Menu[] $menus
 * @property Collection|Permission[] $permissions
 *
 * @package App\Models
 */
class Menu extends Model
{
	use SoftDeletes;
	protected $table = 'menus';

	protected $casts = [
		'order' => 'int',
		'parent_id' => 'int',
		'status_sort' => 'int',
		'status' => 'int',
		'for_administrator' => 'int'
	];

	protected $fillable = [
		'name',
		'icon',
		'path',
		'order',
		'parent_id',
		'status_sort',
		'status',
		'for_administrator'
	];

	public function menu()
	{
		return $this->belongsTo(Menu::class, 'parent_id');
	}

	public function menu_companies()
	{
		return $this->hasMany(MenuCompany::class);
	}

	public function menus()
	{
		return $this->hasMany(Menu::class, 'parent_id');
	}

	public function permissions()
	{
		return $this->hasMany(Permission::class);
	}
}
