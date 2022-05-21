<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontENdController extends Controller
{
    public function index()
    {
        // $a = [1, 2, 3, 4, 5];
        // $b = $a->splice(0, 2);
        // $c = $a->splice(0, 1);
        // $d = $a->splice(0, 2);
        //  return [$a, $b, $c, $d];
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
        return view('website.about');
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
    public function singlePost($slug)
    {
        $post = Post::with('category', 'user')->where('slug', $slug)->first();
        $popularPosts = Post::with('category', 'user')->inRandomOrder()->limit(3)->get();
        $categories = Category::all();
        $tags = Tag::all();

        if($post){
            return view('website.post', compact(['post', 'popularPosts', 'categories', 'tags']));
        }
        else{
            return redirect('website.index');
        }
    }
    public function contact()
    {
        return view('website.contact');
    }
    
}
