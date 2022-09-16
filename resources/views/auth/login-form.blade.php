<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form - Halaman Login </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center pt-5 mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login Form</h5>
                        <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" id="email" class="form-control" name="email" required />
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me"
                                    checked />
                                <label class="form-check-label" for="remember_me"> Remember me </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-2">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</body>

</html>
