<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding-top: 100px;">
                <h3>Sign In</h3>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    @foreach ($errors->all() as $err)
                        <div class="alert alert-danger">
                            {{ $err }}
                        </div>
                    @endforeach
                @endif
                <form method="POST" action="{{ route('storeSignin') }}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    @csrf
                    <div class="mt-3">
                        <div class="mb-3">
                            <button class="btn btn-primary" style="margin-right: 260px;">Sign In</button>
                            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                        </div>
                        <p>Don't have an account? <a href="{{ route('signup') }}" class="primary me-2">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>