<?php

namespace App\Livewire;

use App\Models\Faculty;
use App\Models\Group;
use App\Models\Region;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Applic extends Component
{

    public $regions;
    public $regionId ;
    public $cityId;
    public $cities;

    public $quarters ;

    public $fakultet_id;
    public $fakultets ;

    public $groups;
  
    // public $city = [];
    
    public function mount()
    {
        $this->regions = DB::table('regions')->get();
        $this->fakultets = Faculty::all();
     
    }
    
     public function updatedRegionId(){
        if($this->regionId !=''){
            $this->cities = DB::table('districts')->where('region_id',$this->regionId)->get();
           }else{
         $this->cities = [];
            }
    }   

    public function updatedCitiesId(){
        if($this->cityId !=''){
            $this->quarters = DB::table('quarters')->where('district_id',$this->cityId)->get();
           }else{
         $this->quarters = [];
            }
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
        $this->updatedRegionId();
        $this->updatedCitiesId();
        return view('livewire.applic');
            
    }
    


}
