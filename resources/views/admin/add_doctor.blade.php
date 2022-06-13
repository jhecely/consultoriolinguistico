<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
      label
      {
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
      <div class="container-fluid page-body-wrapper" align="center">

        

        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
          </div>
          @endif

        <div class="container" align="" style="padding-top: 100px;">
          
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
          </div>
          @endif

          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="font-size:2vw;">REGISTRAR ABOGADO</h1>

            <div style="padding: 25px;">
              <label>Nombre de abogado</label>
              <input type="text" style="color:black;" name="name" placeholder="Escriba el nombre" required="">
            </div>

            <div style="padding: 25px;">
              <label>Celular</label>
              <input type="text" style="color:black;" name="phone" placeholder="Escriba el número de celular"required="">
            </div>

            <div style="padding: 25px;">
              <label>Especialidad</label>
             <select name="speciality" style="color:black; width: 200px;"required=""> 
                <option>--Seleccionar--</option>
                <option value="penal">Penal</option>
                <option value="civil">Civil</option>
                <option value="agrario">Agrario</option>
                <option value="laboral">Laboral</option>
                <option value="familiar">Familiar</option>
                <option value="graduacion">Modalidad de raduación</option>
                <option value="violencia">Violencia contra la mujer</option>
              </select>         
            </div>

            <div style="padding: 25px;">
              <label>Correo</label>
              <input type="email" style="color:black;" name="email" placeholder="Escriba el correo"required="">
            </div>

            <div style="padding: 25px;">
              <label>Foto</label>
              <input type="file" name="file" required="">
            </div>

            <div style="padding: 25px;">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>


          </form>
        </div>
      </div>

    

    <!-- container-scroller -->

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
