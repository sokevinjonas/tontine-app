<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Liens de la barre de navigation à droite -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <div class="navbar-nav pl-2">
        <!-- Fil d'Ariane (breadcrumb) -->
        <!-- <ol class="breadcrumb p-0 m-0 bg-white">
            <li class="breadcrumb-item active">Tableau de bord</li>
        </ol> -->
    </div>

    <!-- Liens de la barre de navigation à gauche -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                <img src="{{asset('assets/img/avatar5.png')}}" class='img-circle elevation-2' width="40" height="40" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                <h4 class="h4 mb-0"><strong>{{ Auth::user()->name .' '. Auth::user()->first_name }}</strong></h4>
                <div class="mb-3">{{ Auth::user()->email }}</div>
                <div class="mb-3">{{ Auth::user()->phone }}</div>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user-cog mr-2"></i> Paramètres								
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-lock mr-2"></i> Changer le mot de passe
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('dashboard.logout')}}" class="dropdown-item text-danger">
                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion							
                </a>							
            </div>
        </li>
    </ul>
</nav>
