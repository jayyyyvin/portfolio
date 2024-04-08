@extends('home')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Users CRUD</h4>
                        <div class="card-header-action">
                            <div class="card-header-action">

                            <a href="{{ route('admin.create') }}" class="btn btn-success">Create User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                               
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($admin as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->role }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy',$admin->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('admin.edit',$admin->id) }}">Edit</a>
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
            </div>
        </div>
    </section>
</div>


</body>
</html>
@endsection