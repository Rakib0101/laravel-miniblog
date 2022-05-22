<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'member_name' => 'required',
            'member_image' => 'required|image',
            'member_bio' => 'nullable',
        ]);

        // dd($request->all());

        $team = Team::create([
            'member_name' => $request->member_name,
            'member_image' => $request->member_image,
            'member_bio' => $request->member_bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
        ]);


        if($request->hasFile('member_image')){
                $file = $request->file('member_image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/team/', $filename);
                $team->member_image = $filename;
                $team->save();
            }

        Session::flash('success', 'Member created successfully');

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        // validation
        $this->validate($request, [
            'member_name' => 'required',
            'member_bio' => 'nullable',
        ]);

        // dd($request->all());

        
        $team->member_name = $request->member_name;
        $team->member_bio = $request->member_bio;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->instagram = $request->instagram;
        

        if($request->hasFile('member_image')){

            $destination = 'uploads/team/'.$post->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('member_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/team/', $filename);
            $team->member_image = $filename;
        }

        $team->update();
        Session::flash('success', 'Member updated successfully');

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if($team){
            $destination = 'uploads/team/'.$team->member_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $team->delete();
            Session::flash('success', 'Member deleted successfully');

            return redirect()->route('team.index');
        }
        
    }
}
