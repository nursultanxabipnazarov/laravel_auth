<div>

    <h1> </h1>
    <div class="form-group">
        <label>Floors</label>
        <select wire:model.live="floor_id"  name="floor_id"  class="form-control selectric"  >
        <option value="">-select-</option>
      
            @foreach ($floors as $floor )
                
            <option value=" {{$floor->id}} " > {{$floor->name}}  </option>
            @endforeach

    
        </select>
        
    </div>
    <div class="form-group">
        <label>Rooms</label>
        <select wire:model.live="roomId"  name="room_id"  class="form-control selectric"  >
        <option value="">-select-</option>
       
            @foreach ($rooms as $room)
                @if ($room->capacity != 0)
                    
                <option value="{{$room->id}}" > {{$room->room_name}} </option>
                @endif
            @endforeach
       
    
        </select>
        
    </div>

</div>
