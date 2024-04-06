@extends('admin.layaut')

@section('title','Attashment')


@section('content')

<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
      
    </div>
    <div class="card-header">
        <h4>Attachment</h4>

        <a  class="btn btn-primary" href=""></a>

        <form action="{{route('storeAttach')}}" method="post">
            @csrf
          @livewire('create-attashment')
            <input type="hidden" value="{{$app->id}}" name="app_id">
          <input type="submit" class="btn btn-success"  value="Attach" >
        </form>




    </div>
</div>
</div>

@endsection