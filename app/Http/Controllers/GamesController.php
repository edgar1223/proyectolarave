<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Category;
use APP\Http\Requests\StoreVideogame;
use App\Mail\VideogameMail;
use Illuminate\Support\Facades\Mail;

class GamesController extends Controller
{
    public function index(){

        //$videogames = array('Mario','Halo','Call of Duty','Fifa 22');

        //$videogames = Videogame::all();
        $videogames = Videogame::orderBy('id','desc')->get();
        //dd($videogames);

       return view('index',['games'=>$videogames]);
        //return "Bienvenido a la web que listara los juegos comprados";
    }

    public function create(){
        $categorias = Category::all();

        
        return view('create',['categorias'=>$categorias]);
    }

    public function help($name_game, $categoria=null){
        $date = now();

        return view("show", ['nameV' => $name_game,
                                'categoryG'=> $categoria,
                                'fecha'=>$date]);
        
        //if($categoria){
        //    return "Bienvenido a la pagina de ".$name_game." categoria ".$categoria;
        //}else{
        //    return "Bienvenido a la pagina del juego";
        //}
    }

    public function storeVideogame( Request $request){

        Videogame::create($request->all());

        foreach(['brenedgar12@gmail.com'] as $recipient){
            Mail::to($recipient)->send(new VideogameMail());
        }

        return redirect()->route('games');
    }

    public function view($game_id){
        $game = Videogame::find($game_id);
        $categorias = Category::all();     
        return view('update',['categorias'=>$categorias, 'game'=>$game]);
    }

    public function updateVideogame( Request $request){

        $request->validate([
            'name_game'=>'required|min:5|max:20'
        ]);
        
        $game = Videogame::find($request->game_id);
        $game->name = $request->name_game;
        $game->category_id=$request-> categoria_id;
        $game->active =1;
        $game->save();

        return redirect()->route('games');
    }

    public function delete( $game_id){

        $game = Videogame::find($game_id);
        $game->delete();
        //return $game_id;
        return redirect()->route('games');
    }
}
