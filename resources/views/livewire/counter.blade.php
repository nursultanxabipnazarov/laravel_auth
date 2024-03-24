<div>
 
    <input type="text" wire:model.live = "searchTerm" >

    @foreach ($districts as $city)
    <li>{{$city->name}} </li>
    @endforeach
    
</div>
