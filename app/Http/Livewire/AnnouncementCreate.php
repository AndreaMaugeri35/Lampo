<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class AnnouncementCreate extends Component
{
    public $title, $body, $price;
    public $category;
    protected $rules=[

        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric|max:999999,99',
        'category'=>'required'

    ];

    protected $messages=[

        'required'=> 'il campo è richiesto',
        'min'=> 'il campo è troppo corto',
        'numeric'=> 'il campo deve essere un numero',
        'max'=> 'prezzo max:999999,99',

    ];

        public function store(){
            $this->validate();
            $category = Category::find($this->category);
            $announcement = $category->announcements()->create([
                'title'=>$this->title,
                'body'=>$this->body,
                'price'=>$this->price
            ]);
            Auth::user()->announcements()->save($announcement);

            session()->flash('message' , 'Hai inserito un annuncio con successo');
            $this->reset();

            
         }

     
        public function updated($propertyName)
        {
            $this->validateOnly($propertyName);
        }
    

    public function render()
    {
        return view('livewire.announcement-create');
    }
}
