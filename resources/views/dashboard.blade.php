<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
    <style>
      .google-button {
        background-color: red;
        color: white;
      }
      .google-button:hover{
        background-color: white;
        border: 1px solid red;
        color: black;
      }
    </style>
  </head>
  <body>
    <div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
      <div>
        <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}">
        <h5>{{ auth()->user()->name }}</h5>
        <a href="{{ route('logout') }}">Logout</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>