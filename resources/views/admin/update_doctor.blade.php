
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;
      }
    </style>
    
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
        <div class="container" align="center" style="padding: 100px;">
        <h1>ACTUALIZACIÓN DE DATOS DE LOS ABOGADO</h1>
          <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:25px;">
              <label>Nombre</label>
              <input type="text" style="color:black" name="name" value="{{$data->name}}">
            </div>
            <div style="padding:25px;">
              <label>Celular</label>
              <input type="text" style="color:black" name="phone" value="{{$data->phone}}">
            </div>
            <div style="padding:25px;">
              <label>Especialidad</label>
              <input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">
            </div>
            <div style="padding:25px;">
              <label>Correo</label>
              <input type="text" style="color:black" name="email" value="{{$data->email}}">
            </div>

            <div style="padding:25px;">
              <label>Fotografía</label>
              <img height="200" width="200" src="doctorimage/{{$data->image}}">
            </div>

            <div style="padding:25px;">
              <label>Cambiar foto</label>
              <input type="file" name="image">
            </div>

            <div style="padding: 25px;">
              <button type="submit" class="btn btn-success">Actualizar</button>
            </div>


          </form>
          
        </div>
          
        </div>
          
    <!-- container-scroller -->

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>



