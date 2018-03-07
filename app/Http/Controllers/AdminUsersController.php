<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Photo;
use App\Http\Requests\UsersRequest;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return view('admin.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::pluck('name', 'id')->all();
        return view( 'admin.users.create', compact('roles') );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {

        if( $file = $request->file('photo_id') ){

            $name = time() . "-" . $file->getClientOriginalName();
            $file->move( 'images', $name );



            $photo = Photo::create( ['path' => $name] );
            $input['photo_id'] = $photo->id;

        }
        $input['name'] = $request->name;
        $input['email'] = $request->email;
        $input['role_id'] = $request->role_id;
        $input['is_active'] = $request->is_active;
        $input['password'] = bcrypt( $request->password );
        User::create($input);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.users.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.users.edit');

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

        return view('admin.users.update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        return view('admin.users.destroy');

    }
}
