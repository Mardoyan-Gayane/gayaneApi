<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $Id
 * @property int|null $ServiceId
 * @property int|null $CustomerCarId
 * @property int|null $EmployeeId
 * @property int $Status
 * @property Carbon $StartTime
 * @property Carbon $EndDate
 * 
 * @property CustomerCar|null $customer_car
 * @property Employee|null $employee
 * @property Service|null $service
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'Orders';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'ServiceId' => 'int',
		'CustomerCarId' => 'int',
		'EmployeeId' => 'int',
		'Status' => 'int'
	];

	protected $dates = [
		'StartTime',
		'EndDate'
	];

	protected $fillable = [
		'ServiceId',
		'CustomerCarId',
		'EmployeeId',
		'Status',
		'StartTime',
		'EndDate'
	];

	public function customer_car()
	{
		return $this->belongsTo(CustomerCar::class, 'CustomerCarId');
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'EmployeeId');
	}

	public function service()
	{
		return $this->belongsTo(Service::class, 'ServiceId');
	}
}
