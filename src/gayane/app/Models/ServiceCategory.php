<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceCategory
 * 
 * @property int $Id
 * @property string $Name
 * 
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class ServiceCategory extends Model
{
	protected $table = 'ServiceCategories';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $fillable = [
		'Name'
	];

	public function services()
	{
		return $this->hasMany(Service::class, 'ServiceCategoryId');
	}
}
