<?php

namespace App\Livewire;

use App\Models\Faculty;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use Livewire\Component;



class Fakultet extends Component
{

    public $fakultet_id;
    public $fakultets ;

    public $groups; 
    public $kurs;


    public function mount()
    {
        $this->fakultets = Faculty::all();
        $this->kurs = DB::table('kurs')->get();
     
    }

    public function updatedFacultyId(){
        if($this->fakultet_id !=''){
            $this->groups = Group::where('fakultet_id',$this->fakultet_id)->get();
           }else{
         $this->groups = [];
            }
    }


    public function render()
    {   
        $this->updatedFacultyId();
        return view('livewire.fakultet');
    }
}
