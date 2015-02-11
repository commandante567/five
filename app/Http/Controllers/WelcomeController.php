<?php namespace App\Http\Controllers;

use App\Article;
use App\Blog;
use App\Category;
use App\Item;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::all();

		$articles = Article::all();

		$catalogs = Category::furniture()->get();

		$top_sales = Item::take(6)->get();

		$last_work = Item::take(1)->get();

		$news = Article::news()->take(2)->get();

		$sales = Article::where('blog_id','=',2)->take(2)->get();

		return view('_layouts.front-page')->with([
			'blogs' => $blogs,
			'articles' => $articles,
			'catalogs' => $catalogs,
			'top-sales' => $top_sales,
			'last-work' => $last_work,
			'news' => $news,
			'sales' => $sales,
		]);
	}

}
