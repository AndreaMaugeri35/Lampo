<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementCreate extends Component
{
    public $title, $body, $price;
    protected $rules=[

        'title'=>'required|min:4',
        'body'=>'required|min:8',
        'price'=>'required|numeric|max:99999999,99',

    ];

    protected $messages=[

        'required'=> 'il campo è richiesto',
        'min'=> 'il campo è troppo corto',
        'numeric'=> 'il campo deve essere un numero',
        'max'=> 'prezzo max:99999999,99',

    ];

        public function store(){
            $this->validate();
            Announcement::create([
                'title'=>$this->title,
                'body'=>$this->body,
                'price'=>$this->price,

            ]);
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
