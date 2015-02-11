<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class Article extends Model {

	//
    protected $table = 'articles';

    protected $fillable = array(
        'title',
        'img',
        'desc',
        'blog_id',
    );

    public static function getValidationRules() {
        $validation = array (
            'title' => 'required',
            'img' => 'required',
            'desc' => 'required',
            'blog_id' => 'required',
        );

        return $validation;
    }

    public function blog() {
        return $this->belongsTo('App\Blog');
    }

    public function scopeNews($query) {
        return $query->where('blog_id','=',1);
    }
}
