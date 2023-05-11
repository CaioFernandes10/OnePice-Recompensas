<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
             background-image: url({{ asset('img/recom.jpg') }});
            height: 100vh;
            width: 100vw;
        }

        .teste{

            width: 100%;

        }
        .fundo{
            background: linear-gradient(#02c2ed,#c1c1c1,#ffffff)
        }
        
        
    </style>
</head>

<body>
   
    
        <div class="teste" >

                <div class="d-flex justify-content-center">
                    @if($erro>=1)
                    <div class="alert alert-primary" role="alert">
                        {{($erro)}}
                    </div>  
                    @else
                
                    @endif
                </div>


            <form action="{{ route('paginas.auth') }}" method="POST"
                style='width: 30%;margin-left:auto; margin-right:auto;'
                class="border border-dark rounded-4 bg-info p-3 fundo">
                <div>
                    <img src="{{ asset('img/one.svg') }}" class="rounded mx-auto d-block" width="200px" height="200px">
                </div>
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color:rgb(0, 0, 0);font-size:25px">Digite seu
                        E-Mail</label>
                    <input type="email" class="form-control  border-dark" id="email" name="email"aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color:rgb(0, 0, 0);font-size:25px">Digite sua
                        Senha</label>
                    <input type="password" class="form-control  border-dark" id="senha" name="senha">
                </div>
                <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Entrar</button>
                </div>

            
                <div style="display:flex">
                    <p>Nao tem cadastro ?</p> <a href="{{route('paginas.cadastro')}}">  Crie uma conta aqui</a>
                  </div>
            </form>
           
    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
