<?php namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Blog
 * @package App
 */
class Blog extends Model {

	//
    protected $table = 'blogs';

    protected $fillable = array(
        'title',
    );

    public static function getValidationRules() {
        $validation = array (
            'title' => 'required',
        );

        return $validation;
    }

    public function article() {
        return $this->hasMany('App\Article');
    }

}
