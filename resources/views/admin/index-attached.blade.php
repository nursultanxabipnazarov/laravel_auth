@extends('admin.layaut')

@section('title', 'INDEX|ATTACHED')

@section('content')
    <div class="row">
        @foreach ($floors as $floor)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                    <div class="article-header">
                        <div class="article-image" data-background="files/flo.jpg">
                        </div>
                        <div class="article-title">
                            <h2><a href="#">  </a></h2>
                        </div>
                    </div>
                    <div class="article-details">
                     <h2> {{$floor->name}} </h2>
                        <div class="article-cta">
                            <a href="{{route('indexAttachedRoom',$floor->id)}}" class="btn btn-primary">Rooms</a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
     
    </div>
@endsection
