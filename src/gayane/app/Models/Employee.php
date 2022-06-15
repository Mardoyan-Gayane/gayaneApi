<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $Id
 * @property string $FirstName
 * @property string $LastName
 * @property string $Patronymic
 * @property string $Image
 * 
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'Employees';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $fillable = [
		'FirstName',
		'LastName',
		'Patronymic',
		'Image'
	];

	public function orders()
	{
		return $this->hasMany(Order::class, 'EmployeeId');
	}
}
