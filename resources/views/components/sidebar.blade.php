<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="dashboard-ecommerce.html">Stisla Admin</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard-ecommerce.html">SA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('dashboard*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li class="{{ Request::is('produk*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa-solid fa-phone"></i> <span>Produk</span></a></li>
            <li class="{{ Request::is('penjualan*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-user"></i> <span>Penjualan</span></a></li>

            
            <li class="{{ Request::is('user*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-user"></i> <span>Account</span></a></li>
            
        </ul>
    </aside>
</div>
