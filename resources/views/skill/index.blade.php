@extends('home')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Skills Table</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('skill.create') }}"> Create Skills</a>
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
                <th>Skill Name</th>
                <th>Percentage</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($skills as $skill)
            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->skill_name }}</td>
                <td>{{ $skill->percentage }}</td>
                <td>
                    <form action="{{ route('skill.destroy',$skill->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('skill.edit',$skill->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
