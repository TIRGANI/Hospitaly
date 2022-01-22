<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Hospitaly</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class='bx bx-search' ></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" >
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>

            <li>
                <a href="{{ route('profile.show') }}">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">
                        @if(Auth::user()->role_id==1)Profile {{$name='Admin'}}@endif
                        @if(Auth::user()->role_id==2)Profile {{$name='Patient'}}@endif
                        @if(Auth::user()->role_id==3 and Auth::user()->asistant==null)Profile {{$name='Medecin'}}@endif
                        @if(Auth::user()->asistant==1)Profile {{$name='Assistant Medicale'}}@endif
                    </span>
                </a>
                <span class="tooltip">Profile {{$name}}</span>
            </li>

        <!--menu medecin -->
        @if(Auth::user()->role_id==3)
            @if(Auth::user()->Gestion_Calendrier==1)
            <li>
                <a href="{{ route('medecin.calender.index') }}">
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Calendrier</span>
                </a>
                <span class="tooltip">Calendrier</span>
            </li>
            @endif
             @if(Auth::user()->Getsion_RDV==1)
            <li>
                <a href="{{ route('medecin.calender.create') }}">
                    <i class='bx bx-book-add'></i>
                    <span class="links_name">Ajouter un rendez-vous</span>
                </a>
                <span class="tooltip">Ajouter un rendez-vous</span>
            </li>

            <li>
                <a href="{{ route('medecin.Events.index') }}">
                    <i class='bx bx-calendar-event'></i>
                    <span class="links_name">rendez-vous entrant</span>
                </a>
                <span class="tooltip">lister les rendez-vous non confirmer</span>
            </li>

            <li>
                <a href="{{ route('medecin.Events.create') }}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Dossier Patient</span>
                </a>
                <span class="tooltip">Dossier Patient</span>
            </li>
             @endif
             @if(Auth::user()->personnaliser_ajonda==1)
            <li>
                <a href="{{ route('medecin.personaliser.index') }}">
                    <i class='bx bx-add-to-queue' ></i>
                    <span class="links_name">Personaliser Ajonda</span>
                </a>
                <span class="tooltip">Personaliser Ajonda</span>
            </li>
            @endif
            @if(Auth::user()->gestion_Assistants==1)
            <li>
                <a href="{{ route('medecin.addassistant.index') }}">
                    <i class='bx bx-clipboard'></i>
                    <span class="links_name">Gestion des assistants</span>
                </a>
                <span class="tooltip">Gestion des assistants</span>
            </li>
            @endif
                <li>
                    <a href="{{ route('patient.espacepatient.show',1) }}">
                        <i class='bx bx-pie-chart-alt-2' ></i>
                        <span class="links_name">Analytics</span>
                    </a>
                    <span class="tooltip">Analytics</span>
                </li>
        @endif
        @if(Auth::user()->role_id==2)
            <li>
                <a href="{{ route('patient.espacepatient.create') }}">
                    <i class='bx bx-add-to-queue' ></i>
                    <span class="links_name">ajouter rendez-vous</span>
                </a>
                <span class="tooltip">ajouter un nouveau rendez-vous</span>
            </li>
            <li>
                <a href="{{ route('patient.showcalendar.create') }}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Mais rendez-vous</span>
                </a>
                <span class="tooltip">Mais rendez-vous</span>
            </li>
        @endif
        @if(Auth::user()->role_id==4)

            @if(Auth::user()->Assistant=='Assistant Medicale')
            <li>
                <a href="{{ route('assistant.roleassistant.index') }}">
                    <i class='bx bx-add-to-queue' ></i>
                    <span class="links_name">Assistant Medicale</span>
                    {{Auth::user()->Assistant}}
                </a>
                <span class="tooltip">Assistant Medicale</span>
            </li>
            @endif
            <li>
                <a href="{{ route('patient.showcalendar.create') }}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Assistant Administratif</span>
                </a>
                <span class="tooltip">Assistant Administratif</span>
            </li>
            <li>
                <a href="{{ route('patient.showcalendar.create') }}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Bénévole</span>
                </a>
                <span class="tooltip">Bénévole</span>
            </li>
        @endif

        <li>
            <a href="#">
                <i class='bx bx-chat' ></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>

        <li class="profile">
            <div class="profile-d etails">

                <div class="name_job">
                    <div class="name">
                    <!--    {{Auth::user()->name}}-->
                        Espace {{$name}}
                    </div>

                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a>
                <i class='bx bx-log-out' id="log_out" href="{{ route('logout') }}"
                   onclick="event.preventDefault();this.closest('form').submit();"></i>
                </a>
            </form>
        </li>
    </ul>
</div>

