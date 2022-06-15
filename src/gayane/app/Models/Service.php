<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $Id
 * @property int|null $ServiceCategoryId
 * @property string $Name
 * @property int $Duration
 * @property int $Price
 * 
 * @property ServiceCategory|null $service_category
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'Services';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'ServiceCategoryId' => 'int',
		'Duration' => 'int',
		'Price' => 'int'
	];

	protected $fillable = [
		'ServiceCategoryId',
		'Name',
		'Duration',
		'Price'
	];

	public function service_category()
	{
		return $this->belongsTo(ServiceCategory::class, 'ServiceCategoryId');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'ServiceId');
	}
}
