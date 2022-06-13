
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

       @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')
      <!-- partial -->

   <div class="container-fluid page-body-wrapper">
    
    <div align="center" style="padding-top:100px;" class="table-responsive">
    
      <table bgcolor="width">
        <h1 class="mt-8" style="font-size:2vw;">CONSULTAS</h1>
      <thead>
        <tr>
          <th scope="col" width="1%">#</th>
          <th style="padding:10px">Nombre Cliente</th>
          <th style="padding:10px">CI</th>
          <th style="padding:8px">Edad</th>
          <th style="padding:8px">Celular</th>
          <th style="padding:8px">Grado instrucción</th>
          <th style="padding:8px">Ocupación</th>
          <th style="padding:8px">Domicilio</th>
          <th style="padding:8px">Fecha</th>
          <th style="padding:8px">Tipo proceso</th>
          <th style="padding:8px">Descripción</th>
          <th style="padding:8px">Estado</th>
          <th width="280px"></th>
        </tr>
      </thead>

        @foreach($data as $appoint)
        <tr align="center" style="background-color: black;">
          <td>{{$appoint->id}}</td>
          <td>{{$appoint->name}}</td>
          <td>{{$appoint->ci}}</td>
          <td>{{$appoint->age}}</td>
          <td>{{$appoint->phone}}</td>
          <td>{{$appoint->level}}</td>
          <td>{{$appoint->ocupation}}</td>
          <td>{{$appoint->address}}</td>
          <td>{{$appoint->date}}</td>
          <td>{{$appoint->departement}}</td>
          <td>{{$appoint->massage}}</td>
          <td>{{$appoint->statuss}}</td>

          <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
          <td>
            <a class="btn btn-success" href="{{url('downloadPDF',$appoint->id)}}"><i class="fa fa-download"></i>Descargar PDF</a>
          </td>

          <td>    
         <a onclick="return confirm ('¿Estas seguro de eliminar?')" class="btn btn-danger" href="{{url('deleteappointment',$appoint->id)}}">Eliminar</a>
          </td>
         <td>
           <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Enviar a correo</a>
         </td>
        </form>
        </tr>

        @endforeach
      </table>
    </div>
   </div>

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
