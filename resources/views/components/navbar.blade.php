<nav class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center navbar">
            
            <a href="{{route('home')}}"><img class="logo" src="media/logo.png" alt=""></a>
            
        </div>
    </div>
</nav>


{{-- offcanvas --}}
<div class="menu-contain">
    <button class="btn menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list menu"></i></button>
</div>

<div class="offcanvas offcanvas-end menu-canvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

    <div class="d-flex justify-content-center mt-2 position relative">
        <img class="logo-canvas" src="media/logo.png" alt="">
        <button type="button" class="btn-close btn-close-canvas" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
    </div>

    <div class="container-fluid">
        <div class="row">        
            <ul class="col-4 text-center mt-5">
                <li class="link-list-item"><a href="{{route('home')}}">Home</a></li>               
                <li class="link-list-item my-3"><a href="{{route('portfolio')}}">Portfolio</a></li>
                <li class="link-list-item mb-3"><a href="{{route('who')}}">Chi Sono</a></li>
                <li class="link-list-item"><a href="{{route('contact')}}">Contattami</a></li>
            </ul>

            <div class="col-8 mt-5">
                <h2 class="canvas-title text-center">Tieniti aggiornato!!</h2>

                <div class="container-fluid mt-5">
                    <div class="row justify-content-between">
                        
                        <div class="col-5">
                            <label class="label" for="name">Nome</label>
                            <input class="input" type="text" id="name">
                        </div>

                        <div class="col-5">
                            <label class="label" for="surname">Cognome</label>
                            <input class="input" type="text" id="surname">
                        </div>

                        
                        <div class="col-12 d-flex flex-column align-items-center mt-5">
                            <label class="label" for="email">Email</label>
                            <input class="input-email" type="email" id="email">
                        </div>

                    </div>
                </div>

                <div class="mt-5 w-100 d-flex justify-content-end">
                    <button class="submit-btn">Iscriviti</button>
                </div>

            </div>
        </div>
    </div>

</div>


