<?php

namespace App\Http\Controllers;

use App\Autors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = Autors::all();
        return view('autors.index')->with('autors', $autors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autors.create');
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
            'name'       => 'required|min:20',
        );
        $validator = Validator::make($request->all(), $rules);
        // process the login
        if ($validator->fails()) {
            return redirect('autors/create')
                ->withErrors($validator)
                ->withInput($request->all());
        } else {
            $subject = new Autors([
                'name' => $request->get('name'),
                'age' => $request->get('age')
            ]);
            $subject->save();
            return redirect('autors');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor = Autors::find($id);
        return view('autors.edit', compact('autors', 'id'))->with('autor', $autor);
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
        $autor = Autors::find($id);
        $autor->name = $request->get('name');
        $autor->age = $request->get('age');
        $autor->save();
        return redirect('autors')->with('success', 'Author was edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sample = Autors::find($id);
        $sample->delete();
        return redirect('/autors')->with('success', 'Autor was deleted!');
    }
}
