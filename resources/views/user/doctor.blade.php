<div class="page-section" id=doctor>
    <div class="container" style="padding-top: 100px;">
      <h1 class="text-center mb-5 wow fadeInUp">Nuestros Abogados</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        
        @foreach($doctor as $doctors)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>


        @endforeach
      </div>
    </div>
  </div>