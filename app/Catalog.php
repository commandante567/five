<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model {

	//
    protected $table = 'catalogs';

    protected $fillable = array(
        'title',
        'icon',
    );

    public static function getValidationRules() {
        $validation = array (
            'title' => 'required',
        );

        return $validation;
    }

    public function category() {
        return $this->hasMany('Category');
    }
}
