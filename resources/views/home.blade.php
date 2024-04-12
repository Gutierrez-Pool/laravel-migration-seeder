@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Lista Treni</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Partenza da</th>
            <th scope="col">Arrivo a</th>
            <th scope="col">Orario Partenza</th>
            <th scope="col">Orario Arrivo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->compagnia}}</td>
                <td>{{$train->stazione_partenza}}</td>
                <td>{{$train->stazione_arrivo}}</td>
                <td>
                    @php

                    // creare un oggetto datetime
                    $datetime = DateTime::createFromFormat("Y-m-d H:i:s", $train->partenza);
                    echo $datetime->format('H:i');
                        
                    @endphp 
                </td>
                <td>
                    @php

                    // creare un oggetto datetime
                    $datetime = DateTime::createFromFormat("Y-m-d H:i:s", $train->arrivo);
                    echo $datetime->format('H:i');
                        
                    @endphp 
                </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>

</div>

@endsection