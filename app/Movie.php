<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $table = "movies";

	protected $fillable = ['name', 'cast', 'direction','duration'];

}
