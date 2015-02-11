<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
    protected $table = 'categories';

    protected $fillable = array(
        'title',
        'img',
        'desc',
        'catalog_id',
    );

    public static function getValidationRules() {
        $validation = array (
            'title' => 'required',
            'img' => 'required',
            'desc' => 'required',
            'catalog_id' => 'required',
        );

        return $validation;
    }

    public function catalog() {
        return $this->belongsTo('Catalog');
    }
    public function items() {
        return $this->hasMany('Item');
    }

    public function scopeFurniture($query) {
        return $query->where('catalog_id','=',1);
    }
}
