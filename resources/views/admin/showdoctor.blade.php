
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

        <div align="center" style="padding-top: 100px;">

      <table bgcolor="width" class="table-responsive">
        <h1 class="mt-8" style="font-size:2vw;">LISTA DE ABOGADOS</h1>
      <thead>
        <tr>
          <th scope="col" width="1%">#</th>
          <th style="padding:10px">Nombre abogado</th>
          <th style="padding:8px">Celular</th>
          <th style="padding:8px">Especialidad</th>
          <th style="padding:8px">Correo</th>
          <th style="padding:8px">Foto</th>
          <th width="280px"></th>
        </tr>
      </thead>

        @foreach($data as $doctor)
        <tr align="center" style="background-color: black;">
          <td>{{$doctor->id}}</td>
          <td>{{$doctor->name}}</td>
          <td>{{$doctor->phone}}</td>
          <td>{{$doctor->speciality}}</td>
          <td>{{$doctor->email}}</td>
          <td> <img height="200" width="200" src="doctorimage/{{$doctor->image}}"></td>

          <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
          <td>
            <a class="btn btn-success" href="{{url('updatedoctor',$doctor->id)}}">Ver y actualizar</a>
          </td>

          <td>    
         <a onclick="return confirm ('¿Estas seguro de eliminar?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Eliminar</a>
        </form>
        </tr>

        @endforeach
      </table>
          
        </div>
        
      </div>




    <!-- container-scroller -->

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>