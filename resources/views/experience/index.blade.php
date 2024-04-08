
@extends('home')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Experience</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('experience.create') }}"> Create Experience</a>
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
        @foreach ($experiences as $experience)
        <tr>
            <td>{{ $experience->id }}</td>
            <td>{{ $experience->work_experience }}</td>
            <td>{{ $experience->date_hire }}</td>
            <td>{{ $experience->address }}</td>
            <td>{{ $experience->description }}</td>
            <td>
                <form action="{{ route('experience.destroy',$experience->id) }}" method="Post">
                <!-- <a class="btn btn-success" href="{{ route('experience.create') }}"> Create</a> -->
                    <a class="btn btn-primary" href="{{ route('experience.edit',$experience->id) }}">Edit</a>
   
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