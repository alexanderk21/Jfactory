<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MPost
 * 
 * @property string $POSTCODE
 * @property int $CNT_ID
 * @property string $CITY
 * @property string $AREA
 *
 * @package App\Models
 */
class MPost extends Model
{
	protected $table = 'm_post';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CNT_ID' => 'int'
	];

	protected $fillable = [
		'POSTCODE',
		'CNT_ID',
		'CITY',
		'AREA'
	];
}
