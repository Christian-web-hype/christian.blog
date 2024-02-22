<x-layout>
    <header class="container-fluid header-portfolio">
        <div class="row">
            
            <div class="col-12 col-xl-6 my-5 mob-col-port d-flex justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <img class="portfolio-graphic watch" src="media/portfolio-graphic.jpg" alt="">
                </div>
            </div>
            
            <div class="col-12 col-xl-6 col-port-tab1 mob-col-port my-5 d-flex flex-column justify-content-center align-items-center">
                <h1 class="tit-portfolio watch text-center mt-5">Esplora il Mio <span class="grassetto">Mondo Creativo</span></h1>
                <h2 class="tit-portfolio watch text-center">Scopri la mia collezione di template</h2>
                <p class="text-center p-portfolio watch">Progettati per ideare ed elevare la tua presenza online con design fatti su misura per te. Sfoglia i template qui sotto e immergiti nel mondo dello sviluppo web e del design.</p>
            </div>
            
        </div>
    </header>
    
    <div class="scuro">
        <section class="container-fluid">
            <div class="row">
                
                <div class="col-12 justify-content-center mob-col-port align-items-center my-5">
                    <h2 class="tit-portfolio watch tms-portfolio text-center mt-5">Template Creati con <span class="grassetto">Passione</span></h2>
                </div>
                
                <!-- modal 1 -->
                <div class="col-12 col-xl-7 d-flex justify-content-evenly align-items-center my-5">
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                        <img class="tm1 watch anim-tm1" src="media/tm1.jpg" alt="">
                    </button>
                </div>
                
                <div class="col-12 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="tit-portfolio watch text-center"><span class="grassetto">Power</span> Template</h2>
                    <p class="p-portfolio watch text-center mt-2">Esplora l'energia esplosiva del tuo progetto online con Power e crea un impatto straordinario sul web, con la <span class="grassetto">potenza</span> di Power, progettato <span class="grassetto">su misura</span> per massimizzare la tua presenza online. Design <span class="grassetto">accattivante</span> e <span class="grassetto">prestazioni ottimizzate</span>, il tuo sito web si distinguerà. Scegli Power per un'esperienza digitale che va oltre le aspettative, portando il tuo progetto al livello successivo.</p>
                </div>
                
                {{-- modal 2 --}}
                <div class="row mod2-row-rev m-0 p-0">
                <div class="col-12 col-xl-5 d-flex flex-column justify-content-center align-items-center mob-col-port1 ps-5">
                    <h2 class="tit-portfolio watch text-center"><span class="grassetto">Collage</span> Template</h2>
                    <p class="p-portfolio watch text center mt-2">Esplora l'eleganza del tuo progetto online con <span class="grassetto">Collage</span> offrendo un'esperienza visiva unica. La caratteristica distintiva di Collage risiede nella <span class="grassetto">disposizione ordinata</span> degli elementi, simile a un collage digitale, che conferisce al tuo sito web un aspetto accattivante e dinamico. Collage <span class="grassetto">trasforma la tua presenza online in un'opera d'arte digitale</span>. Scegli Collage per superare le aspettative e portare il tuo progetto al livello successivo, dove ogni elemento è posizionato con cura per creare un impatto straordinario.</p>
                </div>
                
                <div class="col-12 col-xl-7 d-flex justify-content-evenly align-items-center my-5">
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        <img class="tm1 watch anim-tm2" src="media/tm2.jpg" alt="">
                    </button>
                </div>
                </div>
                
                {{-- modal 3 --}}
                <div class="col-12 col-xl-7 d-flex justify-content-evenly align-items-center my-5">
                    <button type="button" class="btn btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        <img class="tm1 watch anim-tm3" src="media/tm3.jpg" alt="">
                    </button>
                </div>
                
                <div class="col-12 m-tab-tm3 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="tit-portfolio watch text-center"><span class="grassetto">Shot</span> Template</h2>
                    <p class="p-portfolio watch mt-2">
                        Entra all'azione con il template <span class="grassetto">Shot</span>. Più di un semplice design; è <span class="grassetto">l'ascesa dei campioni visivi</span>. Immergiti in un mondo dove ogni immagine è un colpo vincente, catturato con la maestria di uno <span class="grassetto">scatto perfetto</span> dove ogni pixel trasuda passione, forza e grinta.
                    </p>
                    
                </div>

            </div>
        </div>
    </section>
</div>
</x-layout>



<!-- Modal 1 -->
<x-modal1/>

<!-- Modal 2 -->
<x-modal2/>

<!-- Modal 3 -->
<x-modal3/>
