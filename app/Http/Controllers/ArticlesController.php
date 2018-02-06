<?php

namespace App\Http\Controllers;

use App\Autors;
use App\Types;
use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\Validator;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::with('types')->with('autors')->get();
        return view('articles.index')->with('articles', $articles);
//        $articles = articles::latest()->paginate(50);
//        return view("articles.index", compact("articles"))->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Types::all();
        $autors = Autors::all();
        return view('articles.create')->with('types', $types)->with('autors', $autors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'title'       => 'required|min:4',
        );
        $validator = Validator::make($request->all(), $rules);
        // process the login
        if ($validator->fails()) {
            return redirect('articles/create')
                ->withErrors($validator)
                ->withInput($request->all());
        } else {
            $subject = new Articles([
                'type_id' => $request->get('type_id'),
                'autor_id' => $request->get('autor_id'),
                'title' => $request->get('title'),
                'description' => $request->get('description'),
            ]);
            $subject->save();
            return redirect('articles');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Articles::find($id);
        return view('articles.edit', compact('tutor','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articles = Articles::find($id);
        $articles->title = $request->get('title');
        $articles->save();
        return redirect('/admin/articles')->with('success', 'Task was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sample = Articles::find($id);
        $sample->delete();
        return redirect('/articles')->with('success', 'Article was deleted!');
    }
}
