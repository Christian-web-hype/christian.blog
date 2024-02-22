<nav class="container-fluid watch">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center navbar">
            
            <a href="{{route('home')}}"><img class="logo" src="media/logo.png" alt=""></a>
            
        </div>
    </div>
</nav>


{{-- offcanvas --}}
<div class="menu-contain watch">
    <button class="btn menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list menu"></i></button>
</div>

<div class="offcanvas offcanvas-end menu-canvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

    <div class="d-flex justify-content-center mt-2 position relative">
        <img class="logo-canvas watch" src="media/logo.png" alt="">
        <button type="button" class="btn-close btn-close-canvas" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
    </div>

    <div class="container-fluid">
        <div class="row">        
            <ul class="col-4 text-center mt-5">
                <li class="link-list-item"><a class="anim-link-canv watch" href="{{route('home')}}">Home</a></li>               
                <li class="link-list-item my-3"><a class="anim-link-canv watch" href="{{route('portfolio')}}">Portfolio</a></li>
                <li class="link-list-item mb-3"><a class="anim-link-canv watch" href="{{route('who')}}">Chi Sono</a></li>
            </ul>

            

            <div class="col-8 mt-5">
                 <h3 class="canvas-title text-center watch">Seguimi e resta aggiornato!</h3>

                <div class="d-flex justify-content-evenly align-items center my-5">
                    <a target="blank" href="https://github.com/Christian-web-hype"><i class="bi bi-github social-canvas watch"></i></a>
                    <a target="blank" href="https://www.linkedin.com/in/christian-casano-web-developer/"><i class="bi bi-linkedin social-canvas watch"></i></a>
                    <a target="blank" href="https://www.instagram.com/casano_christian/"><i class="bi bi-instagram social-canvas watch"></i></a>
                </div>
            </div>

            <ul class="col-12 mt-4">
                <li class="link-list-item watch foot-canvas">+39 348 491 0086</li>
                <li class="link-list-item watch foot-canvas mt-2">christian.casano5@gmail.com</li>
            </ul>

        </div>
    </div>

</div>


