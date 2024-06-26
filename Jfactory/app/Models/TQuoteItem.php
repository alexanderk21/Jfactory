<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TQuoteItem
 * 
 * @property int $ITM_ID
 * @property int|null $MQT_ID
 * @property string|null $ITEM_NO
 * @property string|null $ITEM_CODE
 * @property string|null $ITEM
 * @property string|null $QUANTITY
 * @property string|null $UNIT
 * @property string|null $UNIT_PRICE
 * @property int $LINE_ATTRIBUTE
 * @property int $TAX_CLASS
 * @property string|null $DISCOUNT
 * @property int|null $DISCOUNT_TYPE
 * @property string|null $AMOUNT
 * @property Carbon|null $INSERT_DATE
 * @property Carbon|null $LAST_UPDATE
 *
 * @package App\Models
 */
class TQuoteItem extends Model
{
	protected $table = 't_quote_item';
	protected $primaryKey = 'ITM_ID';
	public $timestamps = false;

	protected $casts = [
		'MQT_ID' => 'int',
		'LINE_ATTRIBUTE' => 'int',
		'TAX_CLASS' => 'int',
		'DISCOUNT_TYPE' => 'int',
		'INSERT_DATE' => 'datetime',
		'LAST_UPDATE' => 'datetime'
	];

	protected $fillable = [
		'MQT_ID',
		'ITEM_NO',
		'ITEM_CODE',
		'ITEM',
		'QUANTITY',
		'UNIT',
		'UNIT_PRICE',
		'LINE_ATTRIBUTE',
		'TAX_CLASS',
		'DISCOUNT',
		'DISCOUNT_TYPE',
		'AMOUNT',
		'INSERT_DATE',
		'LAST_UPDATE'
	];
}
