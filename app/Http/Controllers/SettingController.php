<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $settings = Setting::where('id', $id)->first();
        $this->validate($request, [
            'site_name' => 'required',
            'copyright' => 'required',
            'image'=> 'sometimes|nullable|image|max:2048',
        ]);

        // dd($request->all());

        $settings->site_name = $request->site_name;
        $settings->copyright = $request->copyright;
        $settings->site_bio = $request->site_bio;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->instagram = $request->instagram;
        $settings->reddit = $request->reddit;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->address = $request->address;
        

        if($request->hasFile('site_logo')){
            $destination = 'uploads/settings/'.$settings->site_logo;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('site_logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/settings/', $filename);
            $settings->site_logo = $filename;
        }
        

        $settings->update();
        Session::flash('success', 'Settings updated successfully');

        return redirect()->route('settings.index');
    }

    
}
