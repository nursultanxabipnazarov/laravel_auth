@extends('admin.layaut')

@section('title','Fakultet')


@section('content')

<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
      
    </div>
    <div class="card-header">
        <h4>Create Fakultet</h4>

        <a  class="btn btn-primary" href="{{route('indexFakultet')}}">Fakultets</a>

        <form action="{{route('storeFakultet')}}" method="post">
            @csrf
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