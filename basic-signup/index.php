<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Basic Signup Landing Page</title>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-md px-4 py-1 navbar-dark bg-dark d-flex justify-content-between">
      <a class="navbar-brand" href="#">Event</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

  <!-- Main body content -->
  <div class="container-fluid">
    <div class="row pt-3">
      <div class="col-10 offset-1 col-md-6 offset-md-3 p-2">
        <div class="form-panel p-4 rounded">
          <div class="form-panel__title">
            <h1 class="h3 text-light text-center">Register your interest today</h1>
            <p class="text-muted text-center">Fill in the form below to receive updates as details are released</p>
          </div>
          <form class="text-light">
            <div class="form-row">
              <div class="col-md-6 mt-2">
                <label for="firstNameInput">First Name</label>
                <input type="text" id="firstNameInput" class="form-control" placeholder="First name">
              </div>
              <div class="col-md-6 mt-2">
                <label for="surnameInput">Surname</label>
                <input type="text" id="surnameInput" class="form-control" placeholder="Last name">
              </div>
          </div>
          <div class="form-group mt-2">
            <label for="exampleInputEmail1">Your Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">(We won't share your details with anyone else)</small>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Contact me with news about future events</label>
          </div>
          <button type="submit" class="box-shadow btn btn-primary mt-3 font-weight-bold text-uppercase mx-auto w-25 d-block">Submit</button>
        </form>
        </div>
      </div>
    </div>


  </div>

  <!-- Load the Bootstrap Javascript and dependencies: -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- And our custom script: -->
  <script src="js/scripts.js"></script>
</body>
</html>
