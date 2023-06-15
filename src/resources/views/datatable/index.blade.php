<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid"></div>
        <div class="container justity-items-right">
            <span class="navbar-text ms-5">
            <a class="navbar-brand mx-auto text-white" href="#">{{ Auth::user()->name }}</a>
          </span>
          <div>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
        
      </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>User Data Table</h2>
            </div>
            <div class="col-md-3">
            <form method="GET" class="form-inline">
                <div class="form-group mb-2">
                    <label for="fliter">Filter</label>
                    <input type="text" class="form-control" id=filter name="filter" placeholder="Name..." value="{{$filter}}">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
        </div>
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success my-3">
                <p>{{ $message }}</p>
            </div>
            @endif
        <div>
            <table class="table table-bordered">
                <tr class="text-center">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Username</th>
                    <th>Company</th>
                    <th>Nationality</th>
                    <th>Created_At</th>
                    <th>Updated_At</th>
                    <th>IS_ADMIN</th>
                    <th width="280px">Action</th>
                </tr>

                @foreach ($userinfos as $userinfo)
                <input type="hidden" value="{{$newpass = substr($userinfo->password,0,13)}}">
                    <tr>
                        <td>{{ $userinfo->name }}</td>
                        <td>{{ $userinfo->phone }}</td>
                        <td>{{ $userinfo->email }}</td>
                        <td width="50px">{{ $newpass }}</td>
                        <td>{{ $userinfo->username }}</td>
                        <td>{{ $userinfo->company }}</td>
                        <td>{{ $userinfo->nationality }}</td>
                        <td>{{ $userinfo->created_at }}</td>
                        <td>{{ $userinfo->updated_at }}</td>
                        <td>{{ $userinfo->is_admin }}</td>
                        <td>
                        <form action="{{ route('userinfos.destroy', $userinfo->email)}}" method="POST" >
                            <a href="{{ route('userinfos.edit', $userinfo->email)}}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $userinfos->links('pagination::bootstrap-5') !!}
            {{-- {{ $userinfos->appends(request()->query())->links() }} --}}
            <div>
                <a href="{{ route('userinfos.create') }}" class="btn btn-warning">Create</a>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>