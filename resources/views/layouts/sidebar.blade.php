<nav class="sidenav shadow-right sidenav-light">
  <div class="sidenav-menu overflow-auto">
    <div class="nav accordion" id="accordionSidenav">

      <a class="nav-link mt-4 fw-bold" style="font-size: 1.1rem" id="dashboard" href="{{ route('Dashboard') }}">
        <div class="nav-link-icon"><i class="fas fa-house-user"></i></div>
        Dashboard
      </a>

      <a class="nav-link collapsed" style="font-size: 1.1rem" href="#" data-toggle="collapse" id="bahan-baku" data-target="#collapse-manajemen-bahan-baku" aria-expanded="false" aria-controls="collapse-manajemen-bahan-baku">
        <div class="nav-link-icon"><i class="fas fa-seedling"></i></div>
        Bahan Baku
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="collapse-manajemen-bahan-baku" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav">
          <a class="nav-link py-1 mr-1" style="font-size: 1rem" id="data-bahan-baku" href="{{ route('Data Bahan Baku') }}">
            <div class="nav-link-icon"><i class="fas fa-layer-group"></i></div>
            Data Bahan Baku
          </a>
          <a class="nav-link py-1" style="font-size: 1rem" id="permintaan-bahan-baku" href="{{ route('Permintaan Bahan Baku') }}">
            <div class="nav-link-icon mr-1"><i class="fas fa-file-alt"></i></div>
            Permintaan Bahan Baku
          </a>
        </nav>
      </div>

      <a class="nav-link collapsed" style="font-size: 1.1rem" href="#" data-toggle="collapse" id="menu-makanan" data-target="#collapse-manajemen-menu-makanan" aria-expanded="false" aria-controls="collapse-manajemen-menu-makanan">
        <div class="nav-link-icon"><i class="fas fa-utensils"></i></div>
        Menu Makanan
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="collapse-manajemen-menu-makanan" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav">
          <a class="nav-link py-1 mr-1" style="font-size: 1rem" id="data-menu-makanan" href="multi-tenant-select.html">
            <div class="nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
            Data Menu Makanan
          </a>
          <a class="nav-link py-1 mr-1" style="font-size: 1rem" id="list-order-makanan" href="multi-tenant-select.html">
            <div class="nav-link-icon"><i class="fas fa-clock"></i></div>
            List Order Makanan
          </a>
        </nav>
      </div>

      <a class="nav-link" style="font-size: 1.1rem" id="laporan" href="">
        <div class="nav-link-icon"><i class="fas fa-concierge-bell"></i></div>
        Order Makanan
      </a>

      <a class="nav-link" style="font-size: 1.1rem" id="laporan" href="">
        <div class="nav-link-icon"><i class="fas fa-chart-line"></i></div>
        Laporan
      </a>

    </div>
  </div>
</nav>