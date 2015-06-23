<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Movie;
use Session;
use Redirect;
use Illuminate\Http\Request;




class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $movies = Movie::All();
        return view('movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Movie::create([
            'name' => $request['name'],
            'cast' => $request ['cast'],
            'direction' =>  $request['direction'],
            'duration' =>  $request['duration'],
            ]);

        return redirect('/pelicula')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movie.edit',['movie'=>$movie]);//osman colocar path fisico del view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $movie = Movie::find($id);
        $movie->fill($request->all());
        $movie->save();

        Session::flash('message','Pelicula Editada Correctament');
        return Redirect::to('/pelicula');
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
