<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 * 
 * @property int $Id
 * @property int|null $BrandId
 * @property string $Model
 * 
 * @property Brand|null $brand
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class Car extends Model
{
	protected $table = 'Cars';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'BrandId' => 'int'
	];

	protected $fillable = [
		'BrandId',
		'Model'
	];

	public function brand()
	{
		return $this->belongsTo(Brand::class, 'BrandId');
	}

	public function customers()
	{
		return $this->belongsToMany(Customer::class, 'CustomerCars', 'CarId', 'CustomerId')
					->withPivot('Id', 'Year', 'Plate', 'Image');
	}
}
