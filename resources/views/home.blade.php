@extends('layouts.public')


@section('title', 'Laravel Migration Seeder')


@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Compagnia</th>
      <th scope="col">Stazione di Partenza</th>
      <th scope="col">Stazione di Arrivo</th>
      <th scope="col">Orario di Patenza</th>
      <th scope="col">Orario di Arrivo</th>
      <th scope="col">Codite Treno</th>
      <th scope="col">Numero Carrozze</th>
      <th scope="col">In Orario</th>
      <th scope="col">Cancellato</th>
      <th scope="col">Data di Partenza</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($trains as $train)
      <tr>
        <th scope="row">{{ $train->company }}</th>
        <td>{{ $train->departure_station }}</td>
        <td>{{ $train->arrival_station }}</td>
        <td>{{ $train->departure_time }}</td>
        <td>{{ $train->arrival_time }}</td>
        <td>{{ $train->train_code }}</td>
        <td>{{ $train->Wagon_number }}</td>
        <td>{{ $train->on_time }}</td>
        <td>{{ $train->deleted }}</td>
        <td>{{ $train->departure_date }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection