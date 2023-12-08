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
   
    @section('apprenant')
    <div class="container">
    
<h1>Liste des Apprenants</h1> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope='col'>nom</th>
            <th scope='col'>prenom</th>
        </tr>
    </thead>
       <tbody>  
          @foreach ($apprenants as $apprenant)
       <tr>
            <td>{{ $apprenant->nom }}</td>
            <td>{{ $apprenant->prenom }}</td>
        </tr>
    
    @endforeach
</tbody>

</table>
</div>
</body>
</html>