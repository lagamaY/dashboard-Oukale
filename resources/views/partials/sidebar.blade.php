<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <!-- <div class="badge badge-info badge-pill">2</div> -->
          </a>
        </li> 
        <li class="nav-item sidebar-category">
          <p>Données</p>
          <span></span>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="{{Route('getVueEnsemble')}}">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Vue d'ensemble</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('getEnTempsReel')}}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Donnée en temps réel</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('getArchive')}}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Historique des Missions</span>
          </a>
        </li>
       
       
        
        <li class="nav-item sidebar-category">
          <p>Oukalê</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('getEtatDeSante')}}">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Etat de santé</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Ressources</span>
          </a>
        </li> <br/>
        <li class="nav-item">
          <a class="nav-link" href="{{Route('getContrôleAdistance')}}">
            <button class="btn bg-danger btn-sm menu-title">Contrôle à distance</button>
          </a>
        </li>
      </ul>
    </nav>