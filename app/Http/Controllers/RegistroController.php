<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\registrorequest;
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registrorequest $request)
    {
        $regis = new User();
        $regis->name = request('name');
        $regis->lastname = request('lastname');
        $regis->email = request('email');
        $regis->password = request('password');
        $regis->phone = request('phone');
        $regis->save();
        return redirect('/registro');
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
        $users = User::all()->where("id","=",$id);
        foreach ($users as $user) {
            return view("gestionUsuario",["id"=>$id,"name"=>$user->name,
                "lastname"=>$user->lastname,"email"=>$user->email,"phone"=>$user->phone,"password"=>$user->password]);
        }
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
        /*$name=$request->input("name");
        $id=$request->input("id");
        User::where("id",$id)->update(["name"=>$name]);
    $users=User::all()->where("id",$id);
    foreach ($users as $user) {
        return redirect("/users/$user->id");
    }*/

    DB::table('users')->where('id', $id)
    ->chunkById($id, function ($users) {
        foreach ($users as $user) {
            DB::table('users')
                ->where('id', $user->id)
                ->update(['name' => 'mas']);
        }
    });


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
