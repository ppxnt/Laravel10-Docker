<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Account</title>
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
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2>Edit Account</h2>
        </div>
        @if (session('status'))
        <div class="alert alert-warning">
            {{ session('status') }}
        </div>
    @endif
        <div>
            <a href="{{ route('admin.home')}}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('userinfos.update', $userinfo->email)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>Name</strong>
                        <input type="text" name="name" value="{{ $userinfo->name }}" class="form-control" placeholder="Type Name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>Phone</strong>
                        <input type="text" name="phone" value="{{ $userinfo->phone }}" class="form-control" placeholder="Type Phone Number">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>Email</strong>
                        <input type="text" name="email" value="{{ $userinfo->email }}" class="form-control" placeholder="Type Email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">    
                    <div class="form-group my-3">
                        <strong>Password</strong>
                        <input type="password" name="password" value="" class="form-control" placeholder="Type Password">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>Username</strong>
                        <input type="text" name="username" value="{{ $userinfo->username }}" class="form-control" placeholder="Type Username">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>Company</strong>
                        <input type="text" name="company" value="{{ $userinfo->company }}" class="form-control"  placeholder="Type Company Name">
                        @error('company')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                    
                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>Nationality</strong>
                        <input type="text" name="nationality" value="{{ $userinfo->nationality }}" class="form-control" placeholder="Type Nationality">
                        @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>ADMIN</strong>
                        <input type="text" name="is_admin" value="{{ $userinfo->is_admin }}" class="form-control" placeholder="Type 0 For User / Type 1 For Admin">
                        @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div>
            </div>
        </form>
    </div>
</body>
</html>