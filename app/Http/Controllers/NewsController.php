<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
class NewsController extends Controller
{
	private $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = $this->news->all();

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    	// get request data
        $data = $request->all();
        
        $news = new News();

        $news->title = $data['title'];
        $news->body = $data['body'];
        $news->save();

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if (!$news = $this->news->find($id))
            return redirect()->back();

        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if (!$news = $this->news->find($id))
            return redirect()->back();

        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        if (!$news = $this->news->find($id))
            return redirect()->back();

        $request = $request->all();

        $data['title'] = $request['title'];
        $data['body'] = $request['body'];

        $news->update($data);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if (!$news = $this->news->find($id))
            return redirect()->back();

        $news->delete();

        return redirect()->route('news.index');
    }
}
