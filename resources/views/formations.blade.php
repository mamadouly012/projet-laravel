<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @section('formations')
    <div class="container">
<h1>Liste des formation</h1> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table table-bordered" class="table table-striped">
    <thead>
        <tr>
            <th scope='col'>libellé</th>
            <th scope='col'> date</th>
        </tr>
       </thead>
       <tbody>
    @foreach ($formations as $formation)
       <tr>
            <td>{{ $formation->libellé }}</td>
            <td>{{ $formation->année }}</td>
        </tr>
    
    @endforeach
</tbody>
</table>