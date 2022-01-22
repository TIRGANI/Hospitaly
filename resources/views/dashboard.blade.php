<x-app-layout>
    <x-slot name="header">
        <div class="hidden sm:ml-10 sm:flex ">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
        </div>
    </x-slot>
    <div class="py-12" style="padding-bottom: 30rem">
           <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.malakoffhumanis.com/sites/smile/files/styles/editorial_page_top_image_desktop/public/images/2020-121-mh-photo-differences-hopital-public-clinique-privee-as-54048895-1024x577.jpg?itok=oVClgsdL" class="d-block w-100 " style="height: 30rem" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.malakoffhumanis.com/sites/smile/files/styles/media_full_width/public/2019-09/img1274-photo-hospitalisation-conseils-mieux-vivre-sejour.jpg?itok=1dQcYwdH" class="d-block w-100 " style="height: 30rem" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.letelegramme.fr/ar/imgproxy.php/images/2019/06/02/morgan-jamain-dieteticienne-fabienne-bichon-cadre-des_4606244_1000x526.jpg?article=20190602-1012300627&aaaammjj=20190602" class="d-block w-100 " style="height: 30rem" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

      <!---->
        <div class="container" style="margin-top: 6rem ;margin-bottom: 6rem">
            <div class="vce-col-content row" data-vce-element-content="true" data-vce-do-apply="padding el-500b1a62" wfd-id="330">
                <div class="col">
                        <figure>
                            <a @if(Auth::user()->role_id==2) href="{{ route('patient.espacepatient.create') }}"  @elseif(Auth::user()->role_id==3) href="{{ route('medecin.calender.index') }}" @elseif(Auth::user()->role_id==4) href="{{ route('medecin.calender.index') }}" @endif title="hi" class="vce-single-image-inner vce-single-image--absolute" style="width: 125px;">
                                <img class="vce-single-image lazyloaded" src="https://cliniquego.com/2016/wp-content/uploads/2020/03/online-medical-consultation-diagnosis.png" data-img-src="https://cliniquego.com/2016/wp-content/uploads/2020/03/online-medical-consultation-diagnosis.png" alt="téléconsultation médicale"    title=" @if(Auth::user()->role_id==2) Consultation en ligne @elseif(Auth::user()->role_id==3)afficher Calendrier @endif"  data-lazy-src="https://cliniquego.com/2016/wp-content/uploads/2020/03/online-medical-consultation-diagnosis.png" data-was-processed="true">
                            </a>
                        </figure>
                    <p class="font20 black mt-3 " >
                        @if(Auth::user()->role_id==2)<a class="black" href="{{ route('patient.espacepatient.create') }}" > {{'consultation online'}}</a>
                        @elseif(Auth::user()->role_id==3)<a class="black" href="{{ route('medecin.calender.index') }}">{{'Calendrier'}}@endif</a>
                    </p>
                </div>

                <div class="col">
                    <figure>
                        <a href="#medicale" title="" class="vce-single-image-inner vce-single-image--absolute" style="width: 125px;">
                            <img class="vce-single-image lazyloaded" src="https://cliniquego.com/2016/wp-content/uploads/2020/03/Groupe-16.png" data-img-src="https://cliniquego.com/2016/wp-content/uploads/2020/03/Groupe-16.png" alt="téléconsultation en travail social" title="nos équipe" data-lazy-src="https://cliniquego.com/2016/wp-content/uploads/2020/03/Groupe-16.png" data-was-processed="true">
                        </a>
                    </figure>
                    <p class="font20 black mt-3 ml-4" >
                        @if(Auth::user()->role_id==2)<a class="black" href="#medicale" > {{'nos équipe'}}</a>
                        @elseif(Auth::user()->role_id==3)<a class="black" href="#medicale">{{'nos équipe'}}@endif</a>
                    </p>
                </div>
                <div class="col ">
                    <figure>
                        <a href="#medicale" title="" class="vce-single-image-inner vce-single-image--absolute" style="width: 125px;">
                            <img class="vce-single-image lazyloaded" src="https://cliniquego.com/2016/wp-content/uploads/2020/04/Telereadaptation.png" data-img-src="https://cliniquego.com/2016/wp-content/uploads/2020/04/Telereadaptation.png" alt="Téléréadaptation en physiothérapie" title="aider à utiliser cette application" data-lazy-src="https://cliniquego.com/2016/wp-content/uploads/2020/04/Telereadaptation.png" data-was-processed="true">
                        </a>
                    </figure>
                    <p class="font20 black mt-3 " style="margin-left: 3rem" >
                        @if(Auth::user()->role_id==2)<a class="black" href="#medicale" > {{'Aide'}}</a>
                        @elseif(Auth::user()->role_id==3)<a class="black" href="#medicale">{{'Aide'}}@endif</a>
                    </p>
                </div>
                <div class="col">
                    <figure>
                        <a href="#medicale" title="" class="vce-single-image-inner vce-single-image--absolute" style="width: 125px;">
                            <img class="vce-single-image lazyloaded" src="https://cliniquego.com/2016/wp-content/uploads/2020/05/Groupe-85.png" data-img-src="https://cliniquego.com/2016/wp-content/uploads/2020/05/Groupe-85.png" alt="" title="plus d'information" data-lazy-src="https://cliniquego.com/2016/wp-content/uploads/2020/05/Groupe-85.png" data-was-processed="true">
                        </a>
                    </figure>
                    <p class="font20 black mt-3" >
                        @if(Auth::user()->role_id==2)<a class="black" href="#medicale" > {{"plus d'information"}}</a>
                        @elseif(Auth::user()->role_id==3)<a class="black" href="#medicale">{{"plus d'information"}}@endif</a>

                    </p>
                </div>
          </div>
        </div>
        <!---->


    <div style="background-color: white; padding-top: 6rem; padding-bottom: 8rem ">
        <div class="clearfix " style="margin-right: 10rem ;margin-left: 4rem">
            <img src="https://www.nicolas-aubineau.com/wp-content/uploads/2014/11/dietetique-clinique.jpg" alt="..." class="float-right " style="width: 30rem; height: 20rem ;border-radius: 1rem; margin-left: 6rem">
            <div class="h3 mb-6 ">Qui Sommes Nous</div>
            <p >Notre société a été cofondée en 2010 par deux PhD marocains fervent défenseur de l’accélération digitale dans notre pays. A partir de ce moment, notre développement a commencé sur le marché du design, de l'impression et des supports Marketing.</p>
        </div>
    </div>
    </div>
</x-app-layout>
