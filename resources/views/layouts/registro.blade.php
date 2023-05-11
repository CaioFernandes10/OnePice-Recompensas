<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
             background-image: url({{ asset('img/zoro.jpg') }});
            height: 100vh;
            width: 100vw;
        }

        .teste{

            width: 100%;

        }
        .fundo{
            background: linear-gradient(#000000,#010e00)
        }
        
        
    </style>
</head>

<body>
   
    
        <div class="teste" >

            {{-- <div class="d-flex justify-content-center">
                @if($erro>=1)
                <div class="alert alert-danger" role="alert">
                    {{$erro}}
                </div>  
                @else
              
                @endif
            </div> --}}


        <form action="{{ route('paginas.cadastroconta') }}" method="POST"
            style='width: 30%;margin-left:auto; margin-right:auto;'
            class="border border-dark rounded-4 bg-info p-3 fundo">
            <div>
                <img src="{{ asset('img/teste.png') }}" class="rounded mx-auto d-block" width="200px" height="200px">
            </div>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color:rgb(255, 255, 255);font-size:15px">Cadastre um E-mail</label>
                <input type="email" class="form-control  border-dark" id="email" name="email"aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color:rgb(255, 254, 254);font-size:15px">Cadastre uma senha</label>
                <input type="password" class="form-control  border-dark" id="senha" name="senha">
            </div>

            <label for="exampleFormControlInput1" class="form-label" style="color:rgb(255, 255, 255)">Selecione o Nivel da Conta</label>
            <select name="nivel" style="color:rgb(0, 0, 0)" class="form-control mb-3">
                <option value="">selecionar</option>
                <option value="1">Nivel 1</option>
                <option value="2">Nivel 2</option>
                
            </select>




            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-success" style="background-color: #3d0606:">cadastrar</button>
            </div>
        </form>
        
    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
