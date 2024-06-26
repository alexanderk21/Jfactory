<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTotalBillitem
 * 
 * @property int $TBLI_ID
 * @property int $TBL_ID
 * @property int $MBL_ID
 * @property Carbon|null $INSERT_DATE
 * @property Carbon|null $LAST_UPDATE
 *
 * @package App\Models
 */
class TTotalBillitem extends Model
{
	protected $table = 't_total_billitem';
	protected $primaryKey = 'TBLI_ID';
	public $timestamps = false;

	protected $casts = [
		'TBL_ID' => 'int',
		'MBL_ID' => 'int',
		'INSERT_DATE' => 'datetime',
		'LAST_UPDATE' => 'datetime'
	];

	protected $fillable = [
		'TBL_ID',
		'MBL_ID',
		'INSERT_DATE',
		'LAST_UPDATE'
	];
}
