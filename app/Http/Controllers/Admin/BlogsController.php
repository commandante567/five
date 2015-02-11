<?php  namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;


/**
 * Class BlogsController
 * @package App\Http\Controllers\Admin
 */
class BlogsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('admin.blog.blog_add');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
			return view('admin.blog.blog_add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BlogRequest $request)
	{
		//


		Blog::create($request->all());

		return redirect('/admin');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);
		$articles = Blog::find($id)->article()->get();

		return view('admin.blog.blog_show')->with([
			'blog' => $blog,
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
		$blog = Blog::findOrFail($id);

		return view('admin.blog.blog_edit')->with(['blog'=> $blog]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,BlogRequest $request)
	{
		$blog = Blog::findOrFail($id);

		$blog->update($request->all());

		return redirect('/admin');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::find($id);

		$blog ->delete();

		return redirect('/admin');
	}

}
