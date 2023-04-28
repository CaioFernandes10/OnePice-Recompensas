@extends('componentes.layout')
@section('recompensa')
<style>
    td{
       vertical-align: middle;
       font-size: 20px;
    }
    
</style>
    


    <div class="row mt-5">
        <div class=" d-flex justify-content-center mb-4">
            <form class="d-flex" role="search" method="GET" action="{{route('paginas.recompensa')}}">
                <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-dark" type="submit">Search</button>
              </form>
        </div>
      

        <div class="col-12  d-flex justify-content-center">
         

            <div class="col-8">
                <table class="table ">

                    <thead class="table-danger">
                      
                        <th>nome</th>
                        <th>apelido</th>
                        <th>recompensa</th>
                        <th>descricao</th>
                        <th style="text-align: center">Foto</th>
                        <th>Deletar</th>
                        <th>Detalhes</th>
                    </thead>
                    @foreach ($dados as $dado => $valor)
                        <tbody >
                            <tr>
                                
                                <td >{{ $valor->nome }}</td>
                                <td>{{ $valor->apelido }}</td>
                                <td>  @php
                                    $number =  $valor->recompensa;
                                    $teste = '฿ ' . number_format($number, 2, ',', '.');
                                    echo $teste;
                                   
                               @endphp</td>
                                <td>{{ $valor->descricao }}</td>

                                <td><img src="{{ url("storage/{$valor->imagem}") }}" alt=""
                                        class=""  width="250" height="150"></td>
                                        <td>    
                                           @if($_SESSION['nivel'] == 1)
                                            
                                            <a style="background-color: red;color:white"  class="btn btn-danger"    href="{{route('paginas.delete',$valor->id)}}">excluir </a>
                                            @else 
                                            <a style="background-color: rgba(115, 115, 115, 0);color:rgba(0, 0, 0, 0.317)">Sem Permissao</a>
                                             @endif
                                            
                                </td>
                                        
                                        <td><a href="{{route('paginas.show',$valor->id)}}" class="btn btn-warning">Detalhes</a></td>

                            </tr>
                        </tbody>
                    @endforeach
                </table>


            </div>

        </div>


        <div>
        @endsection
