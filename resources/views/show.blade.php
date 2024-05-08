<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>Lista de Hello World</title>
  </head>
  <body>
    <div class="container mt-5 border">
    
<form action="{{route('todos-update', ['id'=>$todo->id])}}" method="post">
    @method('PATCH')  
    @csrf
    

  @if (session('success'))
<h6 class="alert alert-success">{{session('success')}}</h6>
  @endif
  
@error('entrada') <!--SE VERIFICA EL NAME DEL FORM AL QUE SE DESEA EVALUAR-->
<h6 class="alert alert-danger">{{$message}}</h6>
@enderror

  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Título de la tarea</strong></label>
    <input type="text" class="form-control" name="entrada" id="exampleInputEmail1" value="{{$todo->titulos}}" placeholder="Título de tarea">
  </div>
   
  <button type="submit" class="btn btn-primary mb-2">Actualizar tarea</button>
</form>


</div> 
    
    <!-- Optional JavaScript -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>