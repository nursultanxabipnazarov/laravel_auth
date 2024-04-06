<?php

namespace App\Livewire;

use App\Models\Floor;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateAttashment extends Component
{

    public $floors;
    public $floor_id ; 
    public $rooms;
    public $roomId;

    public function mount()
    {
        $this->floors = Floor::all();
        
     
    }

    public function updatedFloorId(){

        
        if($this->floor_id !=''){
            $this->rooms = DB::table('rooms') ->where('floor_id',$this->floor_id)->get();
            
           }else{
         $this->rooms = [];
            }
    }

    public function render()
    {   
        $this->updatedFloorId();

        return view('livewire.create-attashment');
    }
}
