<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reroll Item</title>
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
        <div class="col-lg-12 text-center mt-5">
            <h2>Reroll Items</h2>
        </div>
        <div class="col-lg-6 text-center mx-auto mb-5">
            <h4>กดปุ่มเพื่อทำการสุ่มของรางวัล</h4>
            <form action="{{ route('reroll') }}" method="POST" class="" role="search">
                @csrf
                @method('POST')
            <button type="submit" class="btn btn-warning">Random</button>
        </form>
        </div>
        <div class="col-md-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success my-3">
                    <p>{{ $message }}</p>
                </div>
                @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger my-3">
                    <p>{{ $message }}</p>
                </div>
                @endif
        </div>
        
    
        <div class="row py-3 justify-content-center">

            {{-- row 1 --}}
            <div class="col col-lg-2 text-center">
                <strong>Item :</strong>
            </div>
          
            <div class="col-md-3">
            @if ($name = Session::get('itemname'))
                <input type="text" value="{{ $name }}"  class="form-control" disabled>
            @else
                <input type="text" value=""  class="form-control" disabled>
            @endif
            </div>
           
        </div>

        <div class="row py-3 justify-content-center">

            {{-- row 2 --}}
            <div class="col col-lg-2 text-center">
                <strong>With Chance :</strong>
            </div>
          
            <div class="col-md-3">
            @if ($chance = Session::get('itemchance'))
                <input type="text" value="{{ $chance }}"  class="form-control" disabled>
            @else
                <input type="text" value=""  class="form-control" disabled>
            @endif
            </div>

        </div>

        <div class="row py-3 justify-content-center">

            {{-- row 3 --}}
            <div class="col col-lg-2 text-center">
                <strong>Quantity :</strong>
            </div>
          
            <div class="col-md-3">
            @if ($quantity = Session::get('itemstock'))
                <input type="text" value="{{ $quantity }}"  class="form-control" disabled>
            @else
                <input type="text" value=""  class="form-control" disabled>
            @endif
            </div>

        </div>
    </div>
    
</body>
</html>