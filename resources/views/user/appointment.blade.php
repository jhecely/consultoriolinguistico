  <div class="page-section" id="appointment">
    <div class="container" align="" style="padding-top: 100px;">
      <h1 class="text-center wow fadeInUp">Realizar consulta</h1>

          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
          </div>
          @endif

      <form class="row gy-2 gx-3 align-items-center" action="{{url('appointment')}}"   method="POST" enctype="multipart/form-data">
        @csrf
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Nombre completo</label>
            <input type="text" class="form-control" style="color:black;" name="name" placeholder="Nombre completo">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>CI</label>
            <input type="text" class="form-control" style="color:black;" name="ci" placeholder="Escriba CI">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Edad</label>
            <input type="text" class="form-control" style="color:black;" name="age" placeholder="Escriba su edad">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Celular</label>
            <input type="text" class="form-control" style="color:black;" name="phone" placeholder="Escriba su telefono">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Grado de instrucción</label>
            <input type="text" class="form-control" style="color:black;" name="level" placeholder="Escriba su grado">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Ocupación</label>
            <input type="text" class="form-control" style="color:black;" name="occupation" placeholder="Escriba su ocupación">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Domicilio</label>
            <input type="text" class="form-control" name="address" placeholder="Escriba su dirección">
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <label>Fecha</label>
            <input type="date" class="form-control" name="date">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <label>Tipo de proceso</label>
            <select name="departement" id="departement" class="custom-select">

              <option value="civil">Penal</option>
              <option value="civil">Civil</option>
              <option value="agrario">Agrario</option>
              <option value="laboral">Laboral</option>
              <option value="familiar">Familiar</option>
              <option value="graduacion">Modalidad de graduación</option>
              <option value="violencia">Violencia contra la mujer</option>
            </select>
          </div>

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Escriba su consulta"></textarea>
          </div>

         <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn"  style="background-color: green"; >Enviar consulta</button>
          </div>
        <div>


      </div>


      </form>
    </div>
  </div> <!-- .page-section -->
