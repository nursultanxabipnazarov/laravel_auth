<div>

    <h1>{{$floorId}} </h1>
    <div class="form-group">
        <label>Floors</label>
        <select wire:model.defer="floorId"  name="floorId"  class="form-control selectric"  >
        <option value="">-select-</option>
      
            @foreach ($floors as $floor )
                
            <option value="{{$floor->id}}" > {{$floor->name}}  </option>
            @endforeach

    
        </select>
        
    </div>
    <div class="form-group">
        <label>Rooms</label>
        <select wire:model.live=""  name="room_id"  class="form-control selectric"  >
        <option value="">-select-</option>
       
            @foreach ($rooms as $room)
                
            <option value="{{$room->id}}" > {{$room->floor_id}} </option>
            @endforeach
       
    
        </select>
        
    </div>

</div>
