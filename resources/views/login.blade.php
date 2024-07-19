<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body, html {
        height: 100%;
      }
      .centered-container {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center centered-container">
            <div class="col-lg-6">
                <div class="card p-5 mt-5">
                    <h4>Form login</h4>
                    <form method="POST" action="login/action">
                    @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Your password" name="password">
                        </div>
                       
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary d-block mt-3">Login</button>
                        </div>
                    </form>
                    <a href="{{ route('redirect') }}" class="btn btn-secondary mt-3">Login With Google</a>
                    <a href="{{ route('register') }}" class="text-decoration-none mt-2">Register here!</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>