@extends('admin.layaut')

@section('title','Group')


@section('content')

<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
      
    </div>
    <div class="card-header">
        <h4>Create Group</h4>

        <a  class="btn btn-primary" href="{{route('indexGroup')}}">Groups</a>

        <form action="{{route('storeGroup')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Select Multiple</label>
                <select  name="fakultet_id" class="form-control" multiple="" data-height="100%">
                    @foreach ( $fakultets as $fakultet )
                        
                    <option value="{{$fakultet->id}}" > {{$fakultet->name}}  </option>
                    @endforeach
            
                </select>
              </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Fakultet name*
                        @if ($errors->has('name'))
                            <div style="color: red">{{ $errors->first('name') }}</div>
                        @endif
                    </label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                </div>

             
                </div>

                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>

        </form>




    </div>
</div>
</div>

@endsection