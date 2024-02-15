<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa-solid fa-w"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Cafe<sup></sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-mosque"></i>
      <span>Dashboard</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('products') }}">
      <i class="fas fa-hippo"></i>
      <span>Product</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fab fa-sticker-mule"></i>
      <span>Kategori</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('jenis') }}">
      <i class="fas fa-cat"></i>
      <span>Jenis</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('stok') }}">
     <i class="fas fa-dragon"></i>
      <span>Stok</span></a>
  </li>
  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>