<div>
                
    <div class="form-group">
        <label>Fakultet</label>
        <select wire:model.live="fakultet_id"  name="fakultet_id"  class="form-control selectric"  >
        <option value="">-select-</option>
        @foreach ($fakultets as $fakultet)
            
        <option value="{{$fakultet->id}}" > {{$fakultet->name}} </option>
        @endforeach
    
        </select>
        
    </div>
    <div class="form-group">
        <label>Groups</label>
        <select wire:model.live=""  name="group_id"  class="form-control selectric"  >
        <option value="">-select-</option>
        @foreach ($groups as $group)
            
        <option value="{{$group->id}}" > {{$group->name}} </option>
        @endforeach
    
        </select>
        
    </div>
    <div class="form-group">
        <label>Kurs</label>
        <select wire:model.live=""  name="kurs"  class="form-control selectric"  >
        <option value="">-select-</option>
        @foreach ($kurs  as $kur)
            
        <option value="{{$kur->name}}" > {{$kur->name}} </option>
        @endforeach
    
        </select>
        
    </div>

  <input class=" btn btn-primary"  type="submit" value="OK">
</div>
