@extends('componentes.layout')
@section('recompensa')
    <style>
        td {
            vertical-align: middle;
            font-size: 20px;
        }
    </style>

    <div class="d-flex justify-content-center">

    </div>


    <div class="d-flex justify-content-center">











        <div class="row mt-5">
            <div class=" d-flex justify-content-center mb-4">
                <form class="d-flex" role="search" method="GET" action="{{ route('paginas.recompensa') }}">
                    <input class="form-control me-2" type="search" placeholder="Buscar" name="search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Buscar</button>
                </form>






            </div>


            @if ($erro == 1)
                <div class="d-flex justify-content-center ">

                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <p>Deletado com Sucesso</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>
            @elseif($erro == 2)
                <div class="d-flex justify-content-center ">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <p>Editado com Sucesso</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>
                @elseif($erro == 3)
                <div class="d-flex justify-content-center ">
                    <div class="alert alert-primary alert-dismissible" role="alert">
                        <p>Criado com Sucesso</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div>    





            @endif








            <div class="col-12  d-flex justify-content-center">


                <div class="col-10">
                    <table class="table ">

                        <thead class="table-dark">

                            <th>Nome</th>
                            <th>Apelido</th>

                            <th>Status</th>
                            <th>recompensa</th>
                            <th>descricao</th>
                            <th style="text-align: center">Foto</th>
                            <th>Deletar</th>
                            <th>Editar</th>
                            <th>Detalhes</th>
                        </thead>
                        @foreach ($dados as $dado => $valor)
                            <tbody>
                                <tr>

                                    <td>{{ $valor->nome }}</td>
                                    <td>{{ $valor->apelido }}</td>

                                    <td>{{ $valor->status }}</td>
                                    <td> @php
                                        $number = $valor->recompensa;
                                        $teste = '฿ ' . number_format($number, 2, ',', '.');
                                        echo $teste;
                                        
                                    @endphp</td>
                                    <td>{{ $valor->descricao }}</td>

                                    <td><img src="{{ url("storage/{$valor->imagem}") }}" alt="" class=""
                                            width="250" height="150"></td>
                                    <td>
                                        @if ($_SESSION['nivel'] == 1)
                                            <a style="background-color: red;color:white" class="btn btn-danger"
                                                href="{{ route('paginas.delete', $valor->id) }}">excluir </a>
                                        @else
                                            <a style="background-color: rgba(115, 115, 115, 0);color:rgba(0, 0, 0, 0.317)">Sem
                                                Permissao Para excluir</a>
                                        @endif

                                    </td>
                                    <td>
                                        @if ($_SESSION['nivel'] == 1)
                                            <a style="background-color: rgb(27, 51, 3);color:white" class="btn btn-sucess"
                                                href="{{ route('paginas.editar', $valor->id) }}">Editar </a>
                                        @else
                                            <a style="background-color: rgba(115, 115, 115, 0);color:rgba(0, 0, 0, 0.317)">Sem
                                                Permissao para Editar</a>
                                        @endif
                                    </td>

                                    <td><a href="{{ route('paginas.show', $valor->id) }}"
                                            class="btn btn-warning">Detalhes</a></td>

                                </tr>
                            </tbody>
                        @endforeach
                    </table>


                </div>

            </div>


            <div>
            @endsection
