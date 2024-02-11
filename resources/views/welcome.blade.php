<x-layout>

 <header class="container-fluid header">
    <div class="row">

        <div class="col-12 banner d-flex flex-column align-items-center">
          <div class="mb-5 d-flex flex-column justify-content-end">
            <h1 class="titolo text-center">Conquista il web</h1>
          </div>

          <div class=" d-flex justify-content-evenly w-50 mb-5">
            <a class="btn btn-link" href="{{route('portfolio')}}">Portfolio</a>
            <a class="btn btn-link" href="{{route('contact')}}">Contattami</a>
          </div>

          {{-- <div>
            <img class="gig" src="media/gig.png" alt="">
          </div> --}}

        </div>

    </div>
 </header>

</x-layout>