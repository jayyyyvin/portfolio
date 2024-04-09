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
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                               
                                <th width="150px">Action</th>
                            </tr>
                            @foreach ($admin as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($user->role == 'admin')
                                     <div class="badge badge-success">Admin</div>
                                         @else
                                     <div class="badge badge-primary">Spectator</div>
                                      @endif
                                    </td>
                                         @if($user->avatar)
                                          <td>
                                              <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                         </td>
                                            @else
                                            <td>
                                                <img src="{{ asset('assets/img/user.png') }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                            </td>
                             @endif
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy',$user->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('admin.edit',$user->id) }}">Edit</a>
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