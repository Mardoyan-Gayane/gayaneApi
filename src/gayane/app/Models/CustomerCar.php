<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerCar
 * 
 * @property int $Id
 * @property int|null $CarId
 * @property int|null $CustomerId
 * @property int $Year
 * @property string $Plate
 * @property string $Image
 * 
 * @property Car|null $car
 * @property Customer|null $customer
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class CustomerCar extends Model
{
	protected $table = 'CustomerCars';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'CarId' => 'int',
		'CustomerId' => 'int',
		'Year' => 'int'
	];

	protected $fillable = [
		'CarId',
		'CustomerId',
		'Year',
		'Plate',
		'Image'
	];

	public function car()
	{
		return $this->belongsTo(Car::class, 'CarId');
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'CustomerId');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'CustomerCarId');
	}
}
