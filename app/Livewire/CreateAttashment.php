<?php

namespace App\Livewire;

use App\Models\Floor;
use App\Models\Room;
use Livewire\Component;

class CreateAttashment extends Component
{

    public $floors;
    public $floorId; 
    public $rooms;
    public $roomId;

    public function mount()
    {
        $this->floors = Floor::all();
        
       
     
    }

    public function updatedFloorId(){
        if($this->floorId !=''){
            $this->rooms = Room::where('floor_id',$this->floorId)->get();
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
