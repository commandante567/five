<?php namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

/**
 * Class ArticlesController
 * @package App\Http\Controllers\Admin
 */
class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['blog'] = Blog::lists('title','id');
		$data['blog'][''] = 'Тут Категория';

		//dd($data);
		return view('admin.article.add')->with([
			'data' => $data,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store(ArticleRequest $request)
	{
		//
		Article::create($request->all());
		return redirect('/admin');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($blog_id,$id)
	{
		$articles = Article::where('blog_id', '=', $blog_id)->find($id);



		return view('admin.article.show')->with([

			'articles'=> $articles,
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
