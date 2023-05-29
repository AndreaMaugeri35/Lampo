<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        $announcements= Announcement::orderBy('created_at','desc')->where('is_accepted', true)->take(6)->get();
        $categories= Category::all();
        return view('welcome',compact('announcements','categories'));
    }

    public function show(Category $category)
    {
        return view('Announcement.categoryShow',compact('category'));
    }

    public function searchAnnouncements(Request $request){

        $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(8);
        return view('Announcement.index', compact('announcements'));
    }

    public function setLanguage($lang){

        session()->put('locale', $lang);
        return redirect()->back();
    }
}
