<x-layout>
    <header class="container-fluid header-portfolio">
        <div class="row">
            
            <div class="col-6 my-5 d-flex justify-content-center align-items-center">
                <div class="a"></div>
            </div>
            
            <div class="col-6 my-5 d-flex flex-column justify-content-center align-items-center">
                <h1 class="tit-portfolio text-center">Esplora il Mio <span class="grassetto">Mondo Creativo</span></h1>
                <h2 class="tit-portfolio text-center">Scopri la mia collezione di template</h2>
                <p class="text-center p-portfolio">Progettati per elevare la tua presenza online ogni design riflette la mia passione. Sfoglia i template qui sotto e immergiti nel mondo dello sviluppo web e del design.</p>
            </div>
            
        </div>
    </header>
    
    <div class="scuro">
        <section class="container-fluid">
            <div class="row">
                
                <div class="col-12 justify-content-center align-items-center my-5">
                    <h2 class="tit-portfolio tms-portfolio text-center mt-5">Template Creati con <span class="grassetto">Passione</span></h2>
                </div>
                
                <div class="col-7 d-flex justify-content-evenly align-items-center my-5">
                    <!-- modal 1 -->
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                        <img class="tm1" src="media/tm1.jpg" alt="">
                    </button>
                </div>

                <div class="col-5 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="tit-portfolio text-center">GymPro Template</h2>
                    <p class="p-portfolio mt-2">Esplora l'energia esplosiva del tuo progetto online con GymPro, con un design eccezionale crea un impatto straordinario sul web, con la potenza di GymPro, progettato su misura per massimizzare la tua presenza online. Con un design accattivante e prestazioni ottimizzate, il tuo sito web si distinguerà. Scegli GymPro per un'esperienza digitale che va oltre le aspettative, portando il tuo progetto al livello successivo.</p>
                </div>
                
                <div class="col-12 d-flex justify-content-center">
                    {{-- modal 2 --}}
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        <div class="a"></div>
                    </button>
                    
                    {{-- modal 3 --}}
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        <div class="a"></div>
                    </button>
                </div>
            </div>
        </section>
    </div>
</x-layout>






<!-- Modal 1 -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-modal d-flex justify-content-center align-items-center" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            
            <div class="modal-body modal-dialog modal-dialog-scrollable m-0 p-0 bgmod1">
                
                {{-- header --}}
                <div class="container-fluid header-mod1">
                    <div class="row justify-content-evenly h-100">
                        {{-- nav --}}
                        <div class="col-12 nav-mod1 d-flex justify-content-between align-items-center">
                            <h2 class="logo-mod1">LOREM</h2>
                            <i class="bi bi-list menu menu-mod1"></i>
                        </div>
                        
                        <div class="col-7 sec-h-mod1 d-flex flex-column justify-content-evenly align-items-start">
                            <div>
                                <h2 class="tit-mod1">LOREM IPSUM <span class="ev-mod1">DOLOR SIT AMET</span> CONSECTETUR ANDIPISICING <span class="ev-mod1">VOLUPTATIBUS ASPERNATUR!</span></h2>
                            </div>
                            
                            <button class="btn-header-mod1 me-5 p-3">LOREM IPSUM!</button>
                        </div>
                        
                        <div class="col-3"></div>
                    </div>
                </div>
                
                
                {{-- section 1 --}}
                <div class="container-fluid sec1-mod1 my-5">
                    <div class="row">
                        <div class="col-12 my-5 position-relative">
                            <h2 class="un-tit-modal1 text-center">LOREM IPSUM DOLOR</h2>
                            <h3 class="tit-modal1">LOREM IPSUM DOLOR</h3>
                        </div>
                        
                        <div class="col-6 d-flex position-relative my-5 justify-content-end align-items-center">
                            <div class="sec1-img-mod1"></div>
                            <p class="step1-mod1">LOREM</p>
                        </div>
                        
                        <div class="col-6 d-flex flex-column justify-content-evenly align-items-center">
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
                            <div class="activity-mod1 d-flex justify-content-center align-items-end"> <button class="btn-header-mod1 p-3 mb-4">LOREM IPSUM!</button></div>
                            <div class="activity1-mod1 d-flex justify-content-center align-items-end"><button class="btn-header-mod1 p-3 mb-4">LOREM IPSUM!</button></div>
                            <div class="activity2-mod1 d-flex justify-content-center align-items-end"><button class="btn-header-mod1 p-3 mb-4">LOREM IPSUM!</button></div>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body modal-dialog modal-dialog-scrollable">
                bom
            </div>
            
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body modal-dialog modal-dialog-scrollable">
                bom
            </div>
            
        </div>
    </div>
</div>
