<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdministratorController extends Controller
{
    //

    public function index()
    {
        return view('admin.index')
            ->with('users', User::orderBy('updated_at', 'DESC')->get());
    }

    public function create()
    {

    }





    public function show()
    {

    }



    /**
     * Show the form for editing the specified resource.
     *  @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('admin.edit')
            ->with('user', User::where('slug', $slug)->first());
    }



    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        User::where('slug', $slug)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'slug' => SlugService::createSlug(User::class, 'slug', $request->email),
                'contact_number' => $request->input('contact_number'),
                'access_level' => $request->input('access_level')
                // 'user_id' => auth()->user()->id
            ]);

        return redirect('/admin')
            ->with('message', 'User has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $user = User::where('slug', $slug);
        $user->delete();

        return redirect('/admin')
            ->with('message', 'The User has been deleted!');
    }
}
