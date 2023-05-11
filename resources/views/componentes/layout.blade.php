<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&family=Sigmar&display=swap" rel="stylesheet">

    <title>Marinha</title>
<style>
*{
            font-family: 'Instrument Serif', serif;
            font-family: 'Sigmar', cursive;
}
</style>
  </head>


<body>
    <div class="row">
        <nav class="navbar navbar-expand-lg" style="background-color: #078d94">
            <div class="container-fluid">
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('paginas.home')}}">Adicionar Recompensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('paginas.recompensa')}}">recompensas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('paginas.sair')}}">sair</a>
                  </li>
                
                </ul>
              </div>
            </div>
          </nav>
        @yield('inicio')
        @yield('recompensa')
        @yield('detalhes')
    </div>
  






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>



