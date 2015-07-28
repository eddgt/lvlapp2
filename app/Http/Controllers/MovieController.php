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
<<<<<<< HEAD
        //$movies = Movie::All();//mostrar todos
        $movies = Movie::paginate(3);//paginar los registros
=======
        $movies = Movie::All();
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
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
<<<<<<< HEAD
        Movie::destroy($id);
        Session::flash('message','Usuario Eliminado correctamente');
        return Redirect::to('/pelicula');
=======
        //
>>>>>>> 48912e5747439d714251d1d0b7b31e4ca1b698d0
    }
}
