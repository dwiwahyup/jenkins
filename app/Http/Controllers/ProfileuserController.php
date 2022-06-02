<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profileuser;
use Illuminate\Support\Facades\DB;

class ProfileuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileuser = DB::table('users')->first();
        return view('frontend/profileuser.index', compact('profileuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        { 
            $profileuser = DB::table('users')->first();
            $admin_lecturer = "Menambahkan";
            return view('frontend/profileuser.create', compact('profileuser','admin_lecturer'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return redirect()->route('profileuser.index')
            ->with('success','Data berhasil ditambahkan.');
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
            $profileuser = Profileuser::where('id', $id)->first();
            $admin_lecturer = "Mengubah";
            return view('frontend/profileuser.create', compact('users','admin_lecturer'));
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
        $profileuser = Profileuser::find($request->id);
        $profileuser->name = $request->name;
        // $profileuser->username = $request->username;
        // $profileuser->email = $request->email;
        // $profileuser->role = $request->role;
        $profileuser->save();
        return redirect()->route('profileuser.index')
                        ->with('success','Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profileuser $profileuser)
    {
        // $kerusakanhp->delete();
        // return redirect()->route('kerusakanhp.index')
        //                 ->with('success','Data berhasil dihapus.');
    }
}
