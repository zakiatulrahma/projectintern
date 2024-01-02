<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuCompany
 * 
 * @property int $company_id
 * @property int $menu_id
 * @property int $order
 * @property int $id
 * 
 * @property Company $company
 * @property Menu $menu
 *
 * @package App\Models
 */
class MenuCompany extends Model
{
	protected $table = 'menu_companies';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'menu_id' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'company_id',
		'menu_id',
		'order'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function menu()
	{
		return $this->belongsTo(Menu::class);
	}
}
