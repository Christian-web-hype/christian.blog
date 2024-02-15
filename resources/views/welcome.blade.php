<x-layout>
  
  <header class="container-fluid header-home">
    <div class="row">
      
      <div class="col-12 d-flex flex-column align-items-center mt-3">
        <div class="mb-5 d-flex flex-column justify-content-end">
          <img class="pres" src="media/homescritta.png" alt="">
        </div>
        
        <div class=" d-flex justify-content-center position-relative">
          <img class="mockup" src="media/mockup.png" alt="">
          <img class="arrow-portfolio" src="media/arrow.png" alt="">
          <a class="btn btn-link portfolio-link" href="{{route('portfolio')}}">Portfolio</a>
        </div>
        
      </div>
      
    </div>
  </header>
  
  <div class="scuro">
    <section class="container-fluid pt-5 sec1">
      <div class="row">
        <div class="col-12 mb-5">
          <h2 class="text-center tit1">Sviluppo Web su Misura</h2>
        </div>

        <div class="col-7 position-relative d-flex justify-content-center align-items-center my-5">
          <div>
            <div class="foto1"></div>
            <div class="foto2"></div>
          </div>

          <div>
            <div class="foto2"></div>
            <div class="foto1"></div>
          </div>
        </div>

        <div class="col-5 d-flex justify-content-center align-items-center">
          <p class="text-center p1 mt-5 px-5">Con il mio servizio di <span class="grassetto">sviluppo web personalizzato</span>, trasformo le tue idee in esperienze digitali straordinarie. Utilizzo le ultime tecnologie per garantire siti web <span class="grassetto">performanti</span>, <span class="grassetto">intuitivi</span> e <span class="grassetto">unici</span>. La tua presenza online sarà non solo funzionale ma anche affascinante. Affidati a un <span class="grassetto">web designer</span> e <span class="grassetto">developer</span> per dare vita alla tua visione digitale!</p>
        </div>

      </div>
    </section>
  </div>



  <section class="container-fluid sec2">
    <div class="row">
      <div class="col-12 mt-5">
        <h2 class="text-center tit1">Scopri chi sono</h2>
      </div>

      <div class="col-5 d-flex justify-content-end align-items-center my-5">
        <p class="p1 text-center px-5 mt-5">Sono un appassionato <span class="grassetto">Web Developer</span> e <span class="grassetto">Web Designer freelancer</span>, fiducioso nelle mie capacità creative. Sono determinato a <span class="grassetto">trasformare</span> ogni progetto in un'opera d'arte digitale. Scopri il potenziale delle mie idee e il mio impegno nel creare soluzioni web uniche e coinvolgenti.</p>
      </div>

      <div class="col-7 d-flex justify-content-center my-5">
        <div class="d-flex align-items-start justify-content-center position-relative">
          <a class="btn btn-link who-link" href="{{route('who')}}">Scopri di più</a>
          <img class="profilo" src="media/profilo.png" alt="">
        </div>
        
      </div>
    </div>
  </section>

<div class="scuro">
  <section class="container-fluid sec3 pt-5">
    <div class="row">
      <div class="col-12">
        <h2 class="tit1 text-center my-5">Tecnologie di Sviluppo che utilizzo</h2>
      </div>

      {{-- <div class="col-6">
        <div>
          <img class="logo-comp" src="media/logohtml.png" alt="">
          <img class="logo-comp" src="media/csslogo.png" alt="">
          <img class="logo-comp" src="media/jslogo.png" alt="">
        </div>

        <div>
          <img class="logo-comp" src="media/phplogo.png" alt="">
          <img class="logo-comp" src="media/mysqllogo.png" alt="">
          <img class="logo-comp" src="media/bootstraplogo.png" alt="">
        </div>

        <div>
          <img class="logo-comp" src="media/laravellogo.png" alt="">
          <img class="logo-comp" src="media/pslogo.png" alt="">
          <img class="logo-comp" src="media/ailogo.png" alt="">
        </div>

      </div> --}}
  </section>
</div>
</x-layout>
