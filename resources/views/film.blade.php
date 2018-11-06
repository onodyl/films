@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3>{{ $film->header }}</h3>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ $film->picture}}" alt="Smiley face" height="142" width="142">
                        </div>
                    </div>
                    <br>
                    <i>{{ $film->subheader }}</i>
                    <hr>
                        <center>
                            <iframe width="420" height="315"                        
                                    src="https://www.youtube.com/embed/{{$film->url}}">
                            </iframe>
                            <br>
                            {{ $film->content }}
                            <hr>
                            <a class="button" href='{{ route('likefilm', ['id' => $film->id, 'like' => 'like']) }}'>Like</a>
                        </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
