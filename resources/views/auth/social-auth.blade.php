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

      .github-button {
        background-color: lightgray;
        color: white;
      }
      .github-button:hover{
        background-color: white;
        border: 1px solid lightgray;
        color: black;
      }
    </style>
  </head>
  <body>
    <div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
      <div>
        <a href="{{ route('googleRedirect') }}" class="btn google-button">Login With Google</a>
      </div>
      <div>
        <a href="{{ route('googleRedirect') }}" class="btn github-button">Login With Github</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>