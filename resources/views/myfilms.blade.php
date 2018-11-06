@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h5>My films</h5></div>
                <div class="card-body">
                    
                    <table>
                        <tr class='header'>
                            <th>id</th>
                            <th>Header</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($films as $film)
                            <tr>
                                <td>{{ $film->id }}</td>
                                <td onclick="window.location=`{{ route('film', ['id' => $film->id]) }}`;">{{ $film->header }}</td>
                                <td>{{ $film->category }}</td>
                                <td><a href='{{ route('likefilm', ['id' => $film->id, 'like' => 'unlike']) }}'>Remove from list</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
