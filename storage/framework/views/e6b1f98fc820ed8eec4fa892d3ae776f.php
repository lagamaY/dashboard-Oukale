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
          <a class="nav-link" href="<?php echo e(Route('getVueEnsemble')); ?>">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Vue d'ensemble</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(Route('getEnTempsReel')); ?>">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Donnée en temps réel</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(Route('getArchive')); ?>">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Historique des Missions</span>
          </a>
        </li>
       
       
        
        <li class="nav-item sidebar-category">
          <p>Documentation</p>
          <span></span>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo e(Route('getEtatDeSante')); ?>">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Etat de santé</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Oukalê</span>
          </a>
        </li> <br/>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(Route('getContrôleAdistance')); ?>">
            <button class="btn bg-danger btn-sm menu-title">Contrôle à distance</button>
          </a>
        </li>
      </ul>
    </nav><?php /**PATH C:\Users\DELL PC\Downloads\dashboard-oukale-19f6487b67badb095dd006b0adbadf6067e039f2\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>