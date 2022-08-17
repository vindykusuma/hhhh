<nav id="navbar" class="navbar order-last mb-0 mt-0 order-lg-0 d-flex">
    <ul>
      <li><a href="/beranda" class="nav-link {{Request::is('/beranda')? 'active':''}}">Beranda</a></li>
      <li><a href="/portofoliopelanggan" class="nav-link {{Request::is('portofoliopelanggan')? 'active':''}}">Portofolio</a></li>
      <li><a href="/pricelistpelanggan" class="nav-link {{Request::is('pricelistpelanggan')? 'active':''}}">Pricelist</a></li>
      <li><a href="/pesananpelanggan" class="nav-link {{Request::is('pesananpelanggan')? 'active':''}}">Pesanan</a></li>
      <li><a href="/tentangkami" class="nav-link {{Request::is('tentangkami')? 'active':''}}"">Tentang Kami</a></li>
      <li><a href="/hubungikami" class="nav-link {{Request::is('hubungikami')?'active':''}}">Hubungi Kami</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
