<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "stylesheet" type="text/css" href= "css/estilo.css">
    <title>Document</title>
</head>
<body>
<div>
        <h2 class="titulo">Listado de Descuentos</h2>
        
</div> 
<div class ="contenedor">
    
<table>
    <thead>
    <tr>
       <th>Id</th>
       <th>Descuento</th>
       <th>Porcentaje</th>
       <th>Descuento Fijo</th>
       <th>Voluntario</th>
       <th>Estado</th>
    </tr>
    </thead>
        <tbody>
        @foreach($descuentos as $descuento)
            <tr>
                <td>{{ $descuento -> id }}</td>
                <td class="izq">{{ $descuento -> descuento }}</td>
                <td>{{ $descuento -> porcentaje }}</td>
                <td>{{ $descuento -> descuento_fijo }}</td>
                <td>{{ $descuento -> voluntario }}</td>
                <td>{{ $descuento -> estado }}</td>
            </tr>
        @endforeach
        </tbody>
</table>
</div>    
    
</body>
</html>