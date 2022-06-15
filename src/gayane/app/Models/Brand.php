<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * 
 * @property int $Id
 * @property string $Name
 * 
 * @property Collection|Car[] $cars
 *
 * @package App\Models
 */
class Brand extends Model
{
	protected $table = 'Brands';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $fillable = [
		'Name'
	];

	public function cars()
	{
		return $this->hasMany(Car::class, 'BrandId');
	}
}
