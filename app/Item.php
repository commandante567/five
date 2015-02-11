<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	//
    protected $table = 'items';

    protected $fillable = array(
        'title',
        'img',
        'desc',
        'category_id',
        'price',
    );

    public function category()
    {
        return $this->belongsTo('Category');
    }
}
