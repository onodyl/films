@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>All films</h5></div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="select_category">Select Category:</label>
                        <select class="form-control" id="select_category">
                            <option data-url="{{ route('home', ['category' => 'all']) }}">All</option>
                            @foreach($categories as $category)
                                <option data-url="{{ route('home', ['category' => $category->category]) }}" @if($selected == $category->category) selected @endif>{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <table>
                        <tr class='header'>
                            <th>id</th>
                            <th>Header</th>
                            <th>Category</th>
                        </tr>
                        @foreach ($films as $film)
                            <tr onclick="window.location=`{{ route('film', ['id' => $film->id]) }}`;">
                                    <td>{{ $film->id }}</td>
                                    <td>{{ $film->header }}</td>
                                    <td>{{ $film->category }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $( "#select_category" ).change(function() {
            var url = $( "#select_category option:selected" ).data('url');
            location.href = url;
        });
    });
</script>

@endsection
