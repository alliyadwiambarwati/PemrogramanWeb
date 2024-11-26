<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>retail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-warning-subtle">
   <div class="container-fluid bg-transparent d-flex justify-content-center align-items-center vh-100   ">
        <div class="card w-25">
            <div class = "card-body">
                    <div class="card-title text-center">
                    <h3>Retail Application</h3>
                    <hr>
                    </div>
                    <form action="login.php" method="post">
                     <div class="mb-3">
                    <label  class="form-label"for="username">username</label>
                    <input class ="form-control"type="text" name="username"/>
                    </div>
                    <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="text" name="password"/>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-outline-info">Login</button>
                    </div>
                    </form>
            </div>
        </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>