<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/dashboard') }}">
                <div class="sidebar-brand-text mx-3">{{ __('Admin Phi Photograph') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Kelola Pengguna') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a> --}}
                        {{-- <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a> --}}
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('User') }}</a>
                        <a class="collapse-item {{ request()->is('admin/pelanggans') || request()->is('admin/pelanggans/*') ? 'active' : '' }}" href="{{ route('admin.pelanggans.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Pelanggan') }}</a>
                        <a class="collapse-item {{ request()->is('admin/fotografers') || request()->is('admin/fotografers/*') ? 'active' : '' }}" href="{{ route('admin.fotografers.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Fotografer') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsemedia" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Kelola Media') }}</span>
                </a>
                <div id="collapsemedia" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/portofolios') || request()->is('admin/portofolios/*') ? 'active' : '' }}" href="{{ route('admin.portofolios.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Portofolio') }}</a>
                        <a class="collapse-item {{ request()->is('admin/jenisfotos') || request()->is('admin/jenisfotos/*') ? 'active' : '' }}" href="{{ route('admin.jenisfotos.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Jenis Foto') }}</a>
                        <a class="collapse-item {{ request()->is('admin/pricelists') || request()->is('admin/pricelists/*') ? 'active' : '' }}" href="{{ route('admin.pricelists.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Pricelist') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePesanan" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Kelola Pesanan') }}</span>
                </a>
                <div id="collapsePesanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/pesanans') || request()->is('admin/pesanans/*') ? 'active' : '' }}" href="{{ route('admin.pesanans.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Pesanan') }}</a>
                        <a class="collapse-item {{ request()->is('admin/cari_pesanans') || request()->is('admin/cari_pesanans/*') ? 'active' : '' }}" href="{{ route('admin.cari_pesanans.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Cari Pesanan') }}</a>
                    </div>
                </div>
            </li>

                     <!-- Nav Item  -->
             <li class="nav-item {{ request()->is('admin/system_calendars') || request()->is('admin/system_calendars') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.system_calendars.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Jadwal Pemotretan') }}</span></a>
            </li>


        </ul>
