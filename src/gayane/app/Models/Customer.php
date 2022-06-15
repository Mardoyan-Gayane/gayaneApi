<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $Id
 * @property string $FirstName
 * @property string $LastName
 * @property string $Patronymic
 * @property string $Email
 * @property bool $Sex
 * @property bool $IsSendNotify
 * 
 * @property Collection|Car[] $cars
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'Customers';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'Sex' => 'bool',
		'IsSendNotify' => 'bool'
	];

	protected $fillable = [
		'FirstName',
		'LastName',
		'Patronymic',
		'Email',
		'Sex',
		'IsSendNotify'
	];

	public function cars()
	{
		return $this->belongsToMany(Car::class, 'CustomerCars', 'CustomerId', 'CarId')
					->withPivot('Id', 'Year', 'Plate', 'Image');
	}
}
