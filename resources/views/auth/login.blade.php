<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="card p-4 col-md-4 mx-auto">
            <h3 class="text-center">Login</h3>

            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="/login">
                @csrf
                <input type="email" name="email" class="form-control mb-2" placeholder="Email">
                <input type="password" name="password" class="form-control mb-2" placeholder="Password">

                <button class="btn btn-dark w-100">Login</button>
            </form>

            <p class="mt-3 text-center">
                Belum punya akun? <a href="/register">Register</a>
            </p>
        </div>
    </div>

</body>

</html>