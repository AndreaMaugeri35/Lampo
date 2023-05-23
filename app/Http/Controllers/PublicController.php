<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        $announcements= Announcement::take(6)->get()->sortByDesc('created_at');
        $categories= Category::all();
        return view('welcome',compact('announcements','categories'));
    }

    public function show(Category $category)
    {
        return view('Announcement.categoryShow',compact('category'));
    }
}
