@extends('componentes.layout')


@section('inicio')
<style>
    html,body{
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* adicionado */
    }
    .body{
        width: 100%;
        min-height: 95vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url({{ asset('img/teste.jpg') }});
            
             
    }
    .fundo{
    border-style: solid;
    width: 100%;
    /* adicionado */
    background: linear-gradient(#02c2ed,#000000);
    padding:20px;
   
    }
    input{
        border-style: solid;
        
    }
    input textarea{
        text-align: left
    }
</style>

<div class="body">
    
    <div class="">
        <div class="col-6 fundo">
                <h1>Editar Recompensa</h1>
            <form action="{{ route('paginas.update',$dados->id) }}" method="POST" enctype="multipart/form-data"  >
                @method('PUT')
                @csrf
                <input type="hidden" id="1" name="1" value="1">   

                <div class="form-group mb-3">
                   
                    <input name="nome" type="text" placeholder="Nome" class="form-control border border-black" value="{{$dados->nome}}">
                    @if ($errors->has('nome'))
                        <div >{{ $errors->first('nome') }} </div>
                    @endif
                    </div>
                   

                <div class="form-group mb-3">
                    <input name="apelido" type="text" placeholder="apelido" class="form-control border border-black" value="{{$dados->apelido}}">
                    @if ($errors->has('apelido'))
                        <div >{{ $errors->first('apelido') }} </div>
                    @endif
                </div>



                <div class="form-group mb-3">
                    <input name="recompensa" type="text" placeholder="digite o valor da recompensa" class="form-control border border-black" value="{{$dados->recompensa}}">
                    @if ($errors->has('recompensa'))
                        <div >{{ $errors->first('recompensa') }} </div>
                    @endif

                </div>


                <div class="form-group mb-3">
                    <label for="imagem">Foto do Procurado</label>
                    <input type="file" name="imagem" id="imagem">
                </div>

                <div class="form-floating">
                    <textarea class="form-control mb-4" placeholder="Leave a comment here" id="descricao" name="descricao" >{{$dados->descricao}}</textarea>
                    <label for="floatingTextarea">Descricao</label>
                  </div>
                   
                </textarea>


                <label for="exampleFormControlInput1" class="form-label" style="color:rgb(255, 255, 255)">selecione o status</label>
                <select name="status" style="color:rgb(0, 0, 0)" class="form-control mb-3">
                    <option value="{{$dados->status}}">{{$dados->status}}</option>
                    <option value="vivo">vivo</option>
                    <option value="morto">morto</option>
                    <option value="preso">preso</option>
                </select>

                    
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-secondary">Atualizar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
