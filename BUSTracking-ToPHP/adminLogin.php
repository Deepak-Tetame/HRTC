<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Administrator Login</h3>
          </div>
          <br>
          <div class="card-body">
            <form action="/login" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
              </div>
              <br>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
              <br>
              <p>Dont have a account  ?<a href=".\adminSignup.html"> Signup here</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>