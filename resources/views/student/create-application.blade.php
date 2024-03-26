@extends('student.layaut')

@section('title', 'APPLICATION')

@section('content')
   
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4>Vertical Layout</h4>
               <p>@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif</p>
            </div>
            <div class="card-body">
                <form id="wizard_with_validation" action="{{route('storeApp')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>Account Information</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Familiya*
                                    @if ($errors->has('lastname'))
                                    <div style="color: red">{{ $errors->first('lastname') }}</div>
                                @endif
                                </label>
                                <h1>  </h1>
                                <input type="text" class="form-control" name="lastname" wire:model.live = "lastname" >
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Ati*
                                    @if ($errors->has('firstname'))
                                    <div style="color: red">{{ $errors->first('firstname') }}</div>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="firstname" >
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">JSHSHIR*
                                    @if ($errors->has('jshshir'))
                                    <div style="color: red">{{ $errors->first('jshshir') }}</div>
                                    @endif
                                </label>
                                <input type="password" class="form-control" name="jshshir" id="password">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Telefon*
                                    @if ($errors->has('phone'))
                                    <div style="color: red">{{ $errors->first('phone') }}</div>
                                    @endif
                                </label>
                                <input type="password" class="form-control" name="phone">
                            </div>
                        </div>
                    </fieldset>
                    <h3>Profile Information</h3>
                    <fieldset>
                        @livewire('applic')
                    </fieldset>
                    <h3> Finish</h3>
                    <fieldset>
                        @livewire('fakultet')
                    </fieldset>


                </form>
            </div>
        </div>
    </div>
</div>


@endsection
