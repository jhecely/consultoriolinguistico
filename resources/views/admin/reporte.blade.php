<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report</title>
</head>
<body>
 <div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
        <div class="container">
        <h1 align="center">Reporte de Consultas</h1>

        <div style="padding:25px;">
            <label>Nombre: </label>
            <input type="text" style="color:black" name="name" value="{{$data->name}}">
        </div>
        <div style="padding:25px;">
            <label>Cédula de identidad: </label>
            <input type="text" style="color:black" name="ci" value="{{$data->ci}}">
        </div>
        <div style="padding:25px;">
            <label>Edad: </label>
            <input type="text" style="color:black" name="age" value="{{$data->age}}">
        </div>
        <div style="padding:25px;">
            <label>Celular: </label>
            <input type="text" style="color:black" name="phone" value="{{$data->phone}}">
        </div>

        <div style="padding:25px;">
            <label>Grado académico: </label>
            <input type="text" style="color:black" name="level" value="{{$data->level}}">
        </div>
        <div style="padding:25px;">
            <label>Ocupación: </label>
            <input type="text" style="color:black" name="ocupation" value="{{$data->ocupation}}">
        </div>
        <div style="padding:25px;">
            <label>Dirección:</label>
            <input type="text" style="color:black" name="address" value="{{$data->address}}">
        </div>
        <div style="padding:25px;">
            <label>Fecha: </label>
            <input type="text" style="color:black" name="date" value="{{$data->date}}">
        </div>
        <div style="padding:25px;">
            <label>Tipo de proceso: </label>
            <input type="text" style="color:black" name="departement" value="{{$data->departement}}">
        </div>
        </div>
        <div style="padding:25px;">
            <label>Descripción: </label>
            <input type="text" style="color:black" name="message" value="{{$data->message}}">
        </div>
     </div>

 </div>



</body>
</html>