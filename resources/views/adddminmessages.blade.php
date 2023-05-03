<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    ">
</head>
<body>
<div class="container">

    <form action="{{ url('/addmsg') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="inputText">id user:</label>
          <input type="text" class="form-control" name="iduser" id="inputText" placeholder="Enter text">
        </div>
        <div class="form-group">
          <label for="inputLongText">Long Text Input</label>
          <textarea class="form-control" id="inputLongText" name="message" rows="3" placeholder="Enter long text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>



</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</html>
