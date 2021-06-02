<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
  <a class="navbar-brand" href="index.html">Sistem Manajemen Produksi</a>
  <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></i></button>
  <ul class="navbar-nav align-items-center ml-auto">
    <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
      <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
      <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up overflow-auto" aria-labelledby="navbarDropdownAlerts">
        <h6 class="dropdown-header dropdown-notifications-header sticky-top">
          <i class="mr-2" data-feather="bell"></i>
          Pemberitahuan
        </h6>
        <a class="dropdown-item dropdown-notifications-item" href="{{ route('Data Order Makanan') }}">
          <div class="dropdown-notifications-item-icon bg-primary"><div class="nav-link-icon text-center"><i class="fas fa-long-arrow-alt-down text-light"></i></div><i data-feather="activity"></i></div>
          <div class="dropdown-notifications-item-content">
            <div class="dropdown-notifications-item-content-details">9 Juni 2021</div>
            <div class="dropdown-notifications-item-content-text">Pesanan baru telah masuk!</div>
          </div>
        </a>
        <a class="dropdown-item dropdown-notifications-item" href="{{ route('Data Bahan Baku') }}">
          <div class="dropdown-notifications-item-icon bg-danger"><div class="nav-link-icon text-center"><i class="fas fa-exclamation-circle text-light"></i></div><i data-feather="activity"></i></div>
          <div class="dropdown-notifications-item-content">
            <div class="dropdown-notifications-item-content-details">9 Juni 2021</div>
            <div class="dropdown-notifications-item-content-text">Terdapat bahan baku yang habis!</div>
          </div>
        </a>
        <a class="dropdown-item dropdown-notifications-item" href="{{ route('Permintaan Bahan Baku') }}">
          <div class="dropdown-notifications-item-icon bg-success"><div class="nav-link-icon text-center"><i class="fas fa-box text-light"></i></div><i data-feather="activity"></i></div>
          <div class="dropdown-notifications-item-content">
            <div class="dropdown-notifications-item-content-details">9 Juni 2021</div>
            <div class="dropdown-notifications-item-content-text">Terdapat bahan baku yang telah sampai!</div>
          </div>
        </a>
        
        <a class="dropdown-item dropdown-notifications-footer" href="#!">Lihat semua pemberitahuan</a>
      </div>
    </li>
    <li class="nav-item dropdown no-caret mr-2 dropdown-user">
      <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i></a>
      <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
        <h6 class="dropdown-header d-flex align-items-center">
          <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
          <div class="dropdown-user-details">
            <div class="dropdown-user-details-name">Putu Bagus Restoran</div>
            <div class="dropdown-user-details-email">putubagus</div>
          </div>
        </h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <div class="dropdown-item-icon"><i class="fas fa-power-off"></i></div>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>