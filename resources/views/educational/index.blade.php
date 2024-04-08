
@extends('home')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Educational Attainment Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('educational.create') }}"> Create Educational Attainment</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Grade Level</th>
            <th>Year Graduated</th>
            <th>School</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($educationals as $educational)
        <tr>
            <td>{{ $educational->id }}</td>
            <td>{{ $educational->grade_level }}</td>
            <td>{{ $educational->year_graduated }}</td>
            <td>{{ $educational->school }}</td>
            <td>
                <form action="{{ route('educational.destroy',$educational->id) }}" method="Post">
                <!-- <a class="btn btn-success" href="{{ route('educational.create') }}"> Create</a> -->
                    <a class="btn btn-primary" href="{{ route('educational.edit',$educational->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection