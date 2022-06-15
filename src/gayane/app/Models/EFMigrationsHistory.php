<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EFMigrationsHistory
 * 
 * @property string $MigrationId
 * @property string $ProductVersion
 *
 * @package App\Models
 */
class EFMigrationsHistory extends Model
{
	protected $table = '__EFMigrationsHistory';
	protected $primaryKey = 'MigrationId';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ProductVersion'
	];
}
