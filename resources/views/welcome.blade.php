<x-layout>

 <header class="container-fluid header">
    <div class="row">

        <div class="col-12 d-flex flex-column align-items-center mt-3">
          <div class="mb-5 d-flex flex-column justify-content-end">
            <img class="pres" src="media/homescritta.png" alt="">
          </div>

          <div class=" d-flex justify-content-center position-relative">
              <img class="mockup" src="media/mockup.png" alt="">
                <img class="arrow-portfolio" src="media/arrow.png" alt="">
                <a class="portfolio-link" href="{{route('portfolio')}}">Portfolio</a>
          </div>

        </div>

    </div>
 </header>

</x-layout>
{{-- 

<a class="btn btn-link" href="{{route('portfolio')}}">Portfolio</a>
<a class="btn btn-link" href="{{route('contact')}}">Contattami</a> --}}