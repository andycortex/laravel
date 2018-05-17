<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests\UsuarioCreateRequest;
use Session;
use Redirect;

class UsuarioController extends Controller
{
    public function create(){
    	return view('usuario.create');
    }
    public function store(UsuarioCreateRequest $request){
    	\Cinema\User::create([
    		'name'=>$request['name'],
    		'email'=>$request['email'],
    		'password'=>$request['password'],
    	]);
        Session::flash('message','usuario agregado correctamente');
        return Redirect::to('/usuario');
    }
    public function index(){
        $users =\Cinema\User::paginate(2);
        return view('usuario.index',compact('users'));
    }
    public function edit($id){
        $user=\Cinema\User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }
    public function update($id,Request $request){
        $user=\Cinema\User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','usuario editado correctamente');
        return Redirect::to('/usuario');
    }
    public function destroy($id){
        $user=\Cinema\User::find($id);
        $user->delete();
        Session::flash('message','usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}
