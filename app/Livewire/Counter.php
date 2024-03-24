<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Counter extends Component
{
    public $user = "Nursultan";
    public $count = 0;
    public $districts;

    public $searchTerm;

    
 
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }



    // public function search(){
    //     $this->districts = DB::table('districts')->get();
    // }


    public function render()
    {    
        $searchTerm = '%'. $this->searchTerm .'%';
        $this->districts =  DB::table('districts')->where('name', 'LIKE', $searchTerm)->get()->toArray();

        return view('livewire.counter');
    }
}
