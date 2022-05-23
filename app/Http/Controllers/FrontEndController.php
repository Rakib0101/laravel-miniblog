<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Team;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontENdController extends Controller
{
    public function index()
    {
        $featurePosts = Post::orderBy('created_at', 'DESC')->take(5)->get();
        $first2 = $featurePosts->splice(0,2);
        $middle1 = $featurePosts->splice(0,1);
        $last2 = $featurePosts->splice(0,2);
        $footerPosts = Post::orderBy('created_at', 'DESC')->take(4)->get();
        $footerFirst1 = $footerPosts->splice(0,1);
        $footer2 = $footerPosts->splice(0,2);
        $footerLast1 = $footerPosts->splice(0,1);
        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(9);
        return view('website.index', compact(['first2', 'middle1', 'last2', 'footerFirst1', 'footer2', 'footerLast1', 'recentPosts']));
    }
    public function about()
    {
        $user = User::first();
        $teams = Team::all();
        return view('website.about', compact(['teams', 'user']));
    }
    public function category($slug)
    {        
        $category = Category::where('slug', $slug)->first();

        if($category){
            $posts = Post::where('category_id', $category->id)->paginate(3);
            return view('website.category', compact(['category', 'posts']));
        }
        else{
            return redirect()->route('website.index');
        }
        
    }
    public function tag($slug)
    {        
        $tag = Tag::where('slug', $slug)->first();

        // return $tag->id;
        if($tag){
            $posts = Post::where('id', $tag->id)->paginate(3);
            // return $posts;
            return view('website.tag', compact(['tag', 'posts']));
        }
        else{
            return redirect()->route('website.index');
        }
        
    }
    public function singlePost(Post $post)
    {
        $post = Post::with('category', 'user')->first();
        $popularPosts = Post::with('category', 'user')->inRandomOrder()->limit(3)->get();
        $categories = Category::all();
        $tags = Tag::all();
        $relatedPosts = Post::where('category_id', $post->category_id)->orderBy('category_id', 'DESC')->inRandomOrder()->take(4)->get();
        $relatedFirst1 = $relatedPosts->splice(0,1);
        $related2 = $relatedPosts->splice(0,2);
        $relatedLast1 = $relatedPosts->splice(0,1);
        if($post){
            return view('website.post', compact(['post', 'popularPosts', 'categories', 'tags', 'relatedFirst1', 'related2', 'relatedLast1']));
        }
        else{
            return redirect('website.index');
        }
    }
    public function contact()
    {
        $user = User::first();
        return view('website.contact', compact('user'));
    }

    public function message_send(Request $request)
    {
        // validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'subject' => '',
            'message' => 'required|min:50',
        ]);

        // dd($request->all());

        $message = Contact::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'subject' => $request->subject ? $request->subject: " ",
            'message' => $request->message,
        ]);

        $message->save();

        Session::flash('send_message', 'Message send successfully');

        return redirect()->route('website.contact');
    }
    
}
