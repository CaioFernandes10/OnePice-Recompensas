@extends('componentes.layout')


@section('detalhes')
    <style>
        .body {
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            font-family: 'Instrument Serif', serif;
            font-family: 'Sigmar', cursive;
        }

        .background-image {
            position: relative;
            width: 500px;
            height: 500px;
        }

        .text-overlay {
            position: absolute;
            top: 52%;
            left: 60%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            z-index: 1;
        }

        .valor {
            position: absolute;
            top: 104%;
            left: 60%;
            transform: translate(-50%, -50%);
            color: rgb(3, 0, 0);
            font-size: 24px;
            z-index: 1;
        }
        .nome{
            position: absolute;
            top: 93%;
            left: 60%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            z-index: 1;
        }
        p{
            white-space: nowrap;
        }
    </style>

    <div class="d-flex justify-content-center align-items-center mt-4">
        <div class="background-image">
            <img src="{{ asset('img/re.png') }}" width="600" height="600">
            <div class="text-overlay">
                <td><img src="{{ url("storage/{$detalhes->imagem}") }}" alt="" width="475" height="250"></td>

            </div>
            <div class="valor">
                <td> @php
                    $number = $detalhes->recompensa;
                    $teste = number_format($number, 2, ',', '.');
                    
                @endphp
                    <p style="font-size: 45px; font-family:sigmar;color:#5e362c">{{ $teste }}</p>
                </td>
            </div>
            <div class="nome">
                <td> 
                    <p style="font-size: 40px; font-family:sigmar;color:#5e362c">{{ $detalhes->nome}}</p>
                </td>
            </div>



        </div>
    </div>
@endsection
