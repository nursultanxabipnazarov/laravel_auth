@extends('admin.layaut')

@section('title', 'INDEX|ATTACHED')

@section('content')
    <div class="row">
        @foreach ($rooms as $room)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                    <div class="article-header">
                        <div class="article-image" data-background="files/room.jpg">
                        </div>
                        <div class="article-title">
                            <h2><a href="#">aaaa</a></h2>
                        </div>
                      
                        
                    </div>
                    <div class="article-details">
                     <h4> {{$room->room_name}} </h4>
                     @if ($room->capacity==0)
                     <h6>Capacity:  <span class="badge badge-danger">{{$room->capacity}} </span></h6>
                    @else  
                    <h6>Capacity:  <span class="badge badge-success">{{$room->capacity}} </span></h6>
                     @endif


                        <div class="article-cta">
                            <a href="" class="btn btn-primary">More</a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
     
    </div>
@endsection
