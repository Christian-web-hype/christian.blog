<x-layout>
    <header class="container-fluid header-portfolio">
        <div class="row">
            
            <div class="col-12 col-xl-6 my-5 mob-col-port d-flex justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <img class="portfolio-graphic" src="media/portfolio-graphic.jpg" alt="">
                </div>
            </div>
            
            <div class="col-12 col-xl-6 col-port-tab1 mob-col-port my-5 d-flex flex-column justify-content-center align-items-center">
                <h1 class="tit-portfolio text-center mt-5">Esplora il Mio <span class="grassetto">Mondo Creativo</span></h1>
                <h2 class="tit-portfolio text-center">Scopri la mia collezione di template</h2>
                <p class="text-center p-portfolio">Progettati per ideare ed elevare la tua presenza online con design fatti su misura per te. Sfoglia i template qui sotto e immergiti nel mondo dello sviluppo web e del design.</p>
            </div>
            
        </div>
    </header>
    
    <div class="scuro">
        <section class="container-fluid">
            <div class="row">
                
                <div class="col-12 justify-content-center mob-col-port align-items-center my-5">
                    <h2 class="tit-portfolio tms-portfolio text-center mt-5">Template Creati con <span class="grassetto">Passione</span></h2>
                </div>
                
                <!-- modal 1 -->
                <div class="col-12 col-xl-7 d-flex justify-content-evenly align-items-center my-5">
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                        <img class="tm1" src="media/tm1.jpg" alt="">
                    </button>
                </div>
                
                <div class="col-12 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="tit-portfolio text-center"><span class="grassetto">Power</span> Template</h2>
                    <p class="p-portfolio text-center mt-2">Esplora l'energia esplosiva del tuo progetto online con Power e crea un impatto straordinario sul web, con la <span class="grassetto">potenza</span> di Power, progettato <span class="grassetto">su misura</span> per massimizzare la tua presenza online. Design <span class="grassetto">accattivante</span> e <span class="grassetto">prestazioni ottimizzate</span>, il tuo sito web si distinguerà. Scegli Power per un'esperienza digitale che va oltre le aspettative, portando il tuo progetto al livello successivo.</p>
                </div>
                
                {{-- modal 2 --}}
                <div class="row mod2-row m-0 p-0">
                <div class="col-12 col-xl-5 d-flex flex-column justify-content-center align-items-center mob-col-port1 ps-5">
                    <h2 class="tit-portfolio text-center"><span class="grassetto">Collage</span> Template</h2>
                    <p class="p-portfolio text center mt-2">Esplora l'eleganza del tuo progetto online con <span class="grassetto">Collage</span> offrendo un'esperienza visiva unica. La caratteristica distintiva di Collage risiede nella <span class="grassetto">disposizione ordinata</span> degli elementi, simile a un collage digitale, che conferisce al tuo sito web un aspetto accattivante e dinamico. Collage <span class="grassetto">trasforma la tua presenza online in un'opera d'arte digitale</span>. Scegli Collage per superare le aspettative e portare il tuo progetto al livello successivo, dove ogni elemento è posizionato con cura per creare un impatto straordinario.</p>
                </div>
                
                <div class="col-12 col-xl-7 d-flex justify-content-evenly align-items-center my-5">
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        <img class="tm1" src="media/tm2.jpg" alt="">
                    </button>
                </div>
                </div>
                
                {{-- modal 3 --}}
                <div class="col-12 col-xl-7 d-flex justify-content-evenly align-items-center my-5">
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        <img class="tm1" src="media/tm3.jpg" alt="">
                    </button>
                </div>
                
                <div class="col-12 m-tab-tm3 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="tit-portfolio text-center"><span class="grassetto">Shot</span> Template</h2>
                    <p class="p-portfolio mt-2">
                        Entra all'azione con il template <span class="grassetto">Shot</span>. Più di un semplice design; è <span class="grassetto">l'ascesa dei campioni visivi</span>. Immergiti in un mondo dove ogni immagine è un colpo vincente, catturato con la maestria di uno <span class="grassetto">scatto perfetto</span> dove ogni pixel trasuda passione, forza e grinta.
                    </p>
                    
                </div>

            </div>
        </div>
    </section>
</div>
</x-layout>






<!-- Modal 1 -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xl-down modal-xl">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-modal d-flex justify-content-center align-items-center" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            
            <div class="modal-body modal-dialog-scrollable m-0 p-0 bgmod1">
                
                {{-- header --}}
                <div class="container-fluid header-mod1">
                    <div class="row justify-content-evenly h-100">
                        {{-- nav --}}
                        <div class="col-12 nav-mod1 d-flex justify-content-between align-items-center">
                            <h2 class="logo-mod1">LOREM</h2>
                            <i class="bi bi-list menu menu-mod1"></i>
                        </div>
                        
                        <div class="col-12 col-md-7 sec-h-mod1 d-flex flex-column justify-content-evenly align-items-start">
                            <div>
                                <h2 class="tit-mod1">LOREM IPSUM <span class="ev-mod1">DOLOR SIT AMET</span> CONSECTETUR ANDIPISICING <span class="ev-mod1">VOLUPTATIBUS ASPERNATUR!</span></h2>
                            </div>
                            <div class="mobile-btn">
                                <button class="btn-header-mod1 me-5 p-3">LOREM IPSUM!</button>
                            </div>
                        </div>
                        
                        <div class="col-3 d-sm-none"></div>
                    </div>
                </div>
                
                
                {{-- section 1 --}}
                <div class="container-fluid sec1-mod1 my-5">
                    <div class="row">
                        <div class="col-12 my-5 position-relative">
                            <h2 class="un-tit-modal1 text-center">LOREM IPSUM DOLOR</h2>
                            <h3 class="tit-modal1">LOREM IPSUM DOLOR</h3>
                        </div>
                        
                        <div class="col-12 col-md-6 d-flex position-relative my-5 justify-content-end align-items-center">
                            <div class="sec1-img-mod1"></div>
                            <p class="step1-mod1">LOREM</p>
                        </div>
                        
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-evenly align-items-center">
                            <p class="p-mod1 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, esse assumenda pariatur repellat suscipit magni neque repudiandae ipsam dolorum quibusdam fugit asperiores nihil expedita corrupti, cumque illum! Sapiente debitis dolorum odio natus aspernatur repellendus nobis doloribus alias unde hic! Exercitationem magnam et illum nostrum eum ab, dolores modi inventore. Corrupti.</p>
                            <div></div>
                        </div>
                    </div>
                </div>
                
                {{-- section 2 --}}
                <div class="container-fluid sec2-mod1 my-5">
                    <div class="row">
                        <div class="col-12 my-5 position-relative">
                            <h2 class="un-tit-modal1 text-center">LOREM IPSUM DOLOR</h2>
                            <h3 class="tit-modal1">LOREM IPSUM DOLOR</h3>
                        </div>
                        
                        <div class="col-12 flex-wrap d-flex justify-content-center my-5">
                            <div class="activity-mod1 d-flex justify-content-center align-items-end"> <button class="btn-header-mod1 p-3 mb-4">PRESS!</button></div>
                            <div class="activity1-mod1 d-flex justify-content-center align-items-end"><button class="btn-header-mod1 p-3 mb-4">PRESS!</button></div>
                            <div class="activity2-mod1 d-flex justify-content-center align-items-end"><button class="btn-header-mod1 p-3 mb-4">PRESS!</button></div>
                        </div>
                    </div>
                </div>
                
                {{-- footer --}}
                <div class="container-fluid fot-mod1">
                    <div class="row align-items-center h-100">
                        <div class="col-12 d-flex flex-column mt-4 justify-content-center align-items-center">
                            
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="link-mod1 mx-3">LINK</li>
                                <li class="link-mod1 mx-3">LINK</li>
                                <li class="link-mod1 mx-3">LINK</li>
                            </ul>
                            
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="link-mod1 mx-3"><i class="bi bi-facebook social-mod1"></i></li>
                                <li class="link-mod1 mx-3"><i class="bi bi-instagram social-mod1"></i></li>
                                <li class="link-mod1 mx-3"><i class="bi bi-twitter social-mod1"></i></li>
                            </ul>
                        </div>
                        
                        <div class="col-12 text-center">
                            <h6 class="firma-foot-mod1">@2024 created by christian casano web designer developer</h6>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>



<!-- Modal 2 -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-xl-down">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-modal d-flex justify-content-center align-items-center" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            
            <div class="modal-body bodym2 position-relative m-0 p-0 modal-dialog-scrollable">
                {{-- nav --}}
                <div class="nav1-mod2 d-flex justify-content-center align-items-center p-0">
                    <ul class="d-flex justify-content-center align-items-center p-0">
                        <li class="d-md-none"><img class="logo-mod2" src="modal2/logo-mod2.png" alt=""></li>
                        <li class="link-mod2 mx-3 mt-2">LINK</li>
                        <li class="link-mod2 mx-3 mt-2">LINK</li>
                        <li class="link-mod2 mx-3 mt-2">LINK</li>
                    </ul>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 nav-mod2 d-flex flex-column align-items-center justify-content-evenly">
                            <img class="logo-mod2 mb-5 pb-5" src="modal2/logo-mod2.png" alt="">
                            <i class="bi bi-facebook social-mod2"></i>
                            <i class="bi bi-instagram social-mod2"></i>
                            <i class="bi bi-twitter social-mod2"></i>
                        </div>
                    </div>
                </div>
                
                {{-- header --}}
                <div class="container-fluid header-mod2 mb-5">
                    <div class="row h-100">
                        <div class="col-12 mt-5 d-flex justify-content-center align-items-end h-100">
                            <h2 class="tit-mod2 mt-5"><span class="ev1-mod2">LOREM</span></h2>
                        </div>
                    </div>
                </div>
                
                {{-- sec1 --}}
                <div class="container-fluid">
                    <div class="row row-tab-mod2 justify-content-end">
                        <div class="col-12 col-md-9 col-xl-9 sec1-mod2 position-relative d-flex justify-content-center align-items-end my-5">
                            <button class="btn-mod2">PRESS</button>
                            <div class="collage1-mod2 d-flex flex-column justify-content-evenly align-items-center">
                                <h2 class="h-mod2">Lorem ipsum</h2>
                                <p class="p-mod2 text-center px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores repellendus quia ab quo inventore voluptatibus pariatur, iusto sapiente ipsum quisquam impedit optio voluptates fugiat tempore enim ipsa, possimus facere id quam odio! Adipisci nemo, cupiditate facere numquam modi possimus sed dolore, inventore eos qui natus eveniet error minima quisquam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- sec2 --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 my-5 p-0 sec2-mod2 row-tab-mod2">
                            
                            <div class="col-12 p-sm-0 col-md-9 col-xl-9 h-100 img-sec2-mod2 d-flex justify-content-center position-relative">
                                <button class="btn-mod2 btn-mobile-mod2">PRESS</button>
                                <div class="collage2-mod2 d-flex flex-column justify-content-evenly align-items-center">
                                    <h2 class="h-mod2">Lorem ipsum</h2>
                                    <p class="p-mod2 text-center px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores repellendus quia ab quo inventore voluptatibus pariatur, iusto sapiente ipsum quisquam impedit optio voluptates fugiat tempore enim ipsa, possimus facere id quam odio! Adipisci nemo, cupiditate facere numquam modi possimus sed dolore, inventore eos qui natus eveniet error minima quisquam.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                {{-- sec3 --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-0 d-flex sec2-mod2 justify-content-center my-5">
                            
                            <div class="col-12 col-md-9 col-xl-9 h-100 img-sec3-mod2 d-flex justify-content-center position-relative">
                                <button class="btn-mod2">PRESS</button>
                                <div class="collage3-mod2 d-flex flex-column justify-content-evenly align-items-center">
                                    <h2 class="h-mod2">Lorem ipsum</h2>
                                    <p class="p-mod2 text-center px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores repellendus quia ab quo inventore voluptatibus pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, quia? </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                {{-- footer --}}
                <div class="container-fluid fot-mod2 mt-5">
                    <div class="row align-items-center h-100">
                        <div class="col-12 d-flex flex-column mt-4 justify-content-center align-items-center">
                            
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="link-mod2 mx-3">LINK</li>
                                <li class="link-mod2 mx-3">LINK</li>
                                <li class="link-mod2 mx-3">LINK</li>
                            </ul>
                            
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="link-mod2 mx-3"><i class="bi bi-facebook social-mod2"></i></li>
                                <li class="link-mod2 mx-3"><i class="bi bi-instagram social-mod2"></i></li>
                                <li class="link-mod2 mx-3"><i class="bi bi-twitter social-mod2"></i></li>
                            </ul>
                        </div>
                        
                        <div class="col-12 text-center">
                            <h6 class="firma-foot-mod2">@2024 created by christian casano web designer developer</h6>
                        </div>
                    </div>
                </div>
                
            </div>  
            
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-xl-down">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-modal d-flex justify-content-center align-items-center" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            
            <div class="modal-body position-relative body-mod3 m-0 p-0 modal-dialog-scrollable">
                {{-- header --}}
                <div class="container-fluid header-mod3">
                    <div class="row">
                        {{-- nav --}}
                        <div class="col-12 d-flex justify-content-evenly align-items-center nav-mod3">
                            <h2 class="logo-mod3">Lorem</h2>
                            <div></div>
                            <div></div>
                            <p class="link-mod3 p-0 m-0">Link</p>
                            <p class="link-mod3 p-0 m-0">Link</p>
                            <p class="link-mod3 p-0 m-0">Link</p>
                            <p class="link-mod3 p-0 m-0">Link</p>
                        </div>
                        {{-- fine nav --}}
                        <div class="col-12 p-0">
                            <div>
                                <div class="head1-mod3 d-flex flex-column justify-content-center align-items-center">
                                    <h2 class="head-txt-mod3">Lorem Ipsum</h2>
                                    <button class="btn-mod3">Press now</button>
                                </div>
                            </div>
                            
                            <div class="d-flex">
                                <div class="head2-mod3 d-flex flex-column justify-content-end align-items-center">
                                    <h2 class="head-txt-mod3 text-center">Lorem Ipsum</h2>
                                    <button class="btn-mod3 mb-3">Press now</button>
                                </div>
                                <div class="head3-mod3 d-flex flex-column justify-content-end align-items-center">
                                    <h2 class="head-txt-mod3 text-center">Lorem Ipsum</h2>
                                    <button class="btn-mod3 mb-3">Press now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- sec1 --}}
                <div class="container-fluid p-0 contain-mobile position-relative d-flex justify-content-center mt-5">
                    <button class="btn1-mod3 mb-3">Press now</button>
                    <div class="row mobile-row justify-content-center">
                        <div class="col-12 my-5">
                            <h2 class="h-mod3 text-center mt-5">Lorem Ipsum Dolor Sit</h2>
                        </div>
                        
                        <div id="carouselExampleInterval" class="carousel d-flex justify-content-center align-items-center slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="3500">
                                    <div class="d-flex">
                                        <img class="img-mod3" src="modal3/car1.jpg" class="d-block w-100" alt="...">
                                        <img class="img-mod3 mobile-car" src="modal3/car2.jpg" class="d-block w-100" alt="...">
                                        <img class="img-mod3 mobile-car" src="modal3/car3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <div class="d-flex">
                                        <img class="img-mod3" src="modal3/car4.jpg" class="d-block w-100" alt="...">
                                        <img class="img-mod3 mobile-car" src="modal3/car5.jpg" class="d-block w-100" alt="...">
                                        <img class="img-mod3 mobile-car" src="modal3/car6.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <div class="d-flex">
                                        <img class="img-mod3s" src="modal3/car7.jpg" class="d-block w-100" alt="...">
                                        <img class="img-mod3 mobile-car" src="modal3/car8.jpg" class="d-block w-100" alt="...">
                                        <img class="img-mod3 mobile-car" src="modal3/car9.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- sec2 --}}
                <div class="container-fluid contain-mobile m-0 p-0">
                    <div class="row mobile-row justify-content-center">
                        <div class="col-12 col-md-6">
                            <p class="text-center p-mod3 link-mod3 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos eius nisi, atque adipisci reiciendis iste tenetur quis odit assumenda illo. Blanditiis expedita quis sequi provident corrupti placeat, sit nisi error molestiae consectetur quam similique architecto minus consequuntur ullam voluptatibus, iure dicta. Quisquam, quasi quam vel sunt aliquam vero quos eos!</p>
                        </div>

                        <div class="col-12 sec2-mod3 position-relative d-flex justify-content-center align-items-center">
                            <h2 class="h-sec2-mod3">Lorem</h2>
                            <p class="p-sec2-mod3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem consectetur quos veniam molestiae deserunt quo fuga ipsa, excepturi reprehenderit qui.</p>
                            <div class="bor-img-sec2-mod3 d-flex justify-content-center align-items-center">
                                <div class="img-sec2-mod3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- footer --}}
                <div class="container-fluid fot-mod3 mt-5">
                    <div class="row align-items-center h-100">
                        <div class="col-12 d-flex flex-column mt-4 justify-content-center align-items-center">
                            
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="link-mod3-fot mx-3"><p>Link</p></li>
                                <li class="link-mod3-fot mx-3"><p>Link</p></li>
                                <li class="link-mod3-fot mx-3"><p>Link</p></li>
                                <li class="link-mod3-fot mx-3"><p>Link</p></li>
                            </ul>
                            
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="link-mod3-fot mx-3"><i class="bi bi-facebook social-mod3"></i></li>
                                <li class="link-mod3-fot mx-3"><i class="bi bi-instagram social-mod3"></i></li>
                                <li class="link-mod3-fot mx-3"><i class="bi bi-twitter social-mod3"></i></li>
                            </ul>
                        </div>
                        
                        <div class="col-12 text-center">
                            <h6 class="firma-foot-mod3">@2024 created by christian casano web designer developer</h6>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
