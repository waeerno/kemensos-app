<div class="shadow-bottom"></div>
        @hasrole('pimpinan')
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item @if (Request::segment(1)=='dashboard' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Dashboard</span>
                    </a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Data Master</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item @if (Request::segment(1)=='sesi' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('sesi.index') }}">
                        <i data-feather='clock'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Sesi</span>
                    </a>
                </li>

                <li class=" nav-item @if (Request::segment(1)=='wilayah' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('wilayah.index') }}">
                        <i data-feather='map-pin'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Wilayah</span>
                    </a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">Pengguna</span></a>
                    <ul class="menu-content">
                        <li class="@if (Request::segment(1)=='lansia' ) active @endif"><a class="d-flex align-items-center" href="{{ route('lansia.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Lansia</span></a>
                        </li>
                       <li class="@if (Request::segment(1)=='pendamping' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pendamping.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Pendamping</span></a>
                        </li>
                       <li class="@if (Request::segment(1)=='pimpinan' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pimpinan.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Pimpinan</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='feather'></i></i><span class="menu-title text-truncate" data-i18n="User">Pengajuan</span></a>
                    <ul class="menu-content">
                        <li class="@if (Request::segment(1)=='pengajuan-baru' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pengajuan-baru.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Pengajuan Baru</span></a>
                        </li>
                       <li class="@if (Request::segment(1)=='pengajuan-baru-terima' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pengajuan-baru-terima.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Pengajuan Diterima</span></a>
                        </li>
                        <li class="@if (Request::segment(1)=='pengajuan-baru-tolak' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pengajuan-baru-tolak.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Pengajuan Ditolak</span></a>
                        </li>
                       <li class="@if (Request::segment(1)=='pengajuan-baru-arsip' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pengajuan-baru-arsip.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Arsip Pengajuan</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='layers'></i><span class="menu-title text-truncate" data-i18n="User">Usulan Barang</span></a>
                    <ul class="menu-content">
                        <li class="@if (Request::segment(1)=='barang-pimpinan' ) active @endif">
                            <a class="d-flex align-items-center" href="{{ route('barang-pimpinan.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">Usulan Baru</span>
                            </a>
                        </li>
                       <li class="@if (Request::segment(1)=='barang-pimpinan-arsip' ) active @endif">
                            <a class="d-flex align-items-center" href="{{ route('barang-pimpinan.arsip') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Edit">Arsip Usulan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class=" nav-item @if (Request::segment(1)=='galeri' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('wilayah.index') }}">
                        <i data-feather='image'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Galeri</span>
                    </a>
                </li> --}}

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Menu</span><i data-feather="more-horizontal"></i>
                </li>

                @hasrole('lansia')

                <li class=" nav-item @if (Request::segment(1)=='profile' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('profile.index') }}">
                        <i data-feather='user'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Profile Lansia</span>
                    </a>
                </li>

                @elserole('pembimbing')

                <li class=" nav-item @if (Request::segment(1)=='profile-pendamping' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('profile-pendamping.index') }}">
                        <i data-feather='user'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Profile Pendamping</span>
                    </a>
                </li>

                @elserole('pimpinan')

                <li class=" nav-item @if (Request::segment(1)=='profile-pimpinan' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('profile-pimpinan.index') }}">
                        <i data-feather='user'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Profile Pimpinan</span>
                    </a>
                </li>

                @endhasrole

                <li class=" nav-item">
                    <a class="d-flex align-items-center"href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i data-feather='log-out'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Logout</span>
                    </a>
                </li>


            </ul>
        </div>
        @elserole('pembimbing')
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item @if (Request::segment(1)=='dashboard' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Dashboard</span>
                    </a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Data Master</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item @if (Request::segment(1)=='lansia' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('lansia.index') }}">
                        <i data-feather="users"></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Lansia</span>
                    </a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps</span><i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='feather'></i></i><span class="menu-title text-truncate" data-i18n="User">Pengajuan</span></a>
                    <ul class="menu-content">
                        <li class="@if (Request::segment(1)=='pengajuan-baru' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pengajuan-baru.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Pengajuan Baru</span></a>
                        </li>
                       <li class="@if (Request::segment(1)=='pengajuan-baru-arsip' ) active @endif"><a class="d-flex align-items-center" href="{{ route('pengajuan-baru-arsip.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Arsip Pengajuan</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='layers'></i><span class="menu-title text-truncate" data-i18n="User">Usulan Barang</span></a>
                    <ul class="menu-content">
                        <li class="@if (Request::segment(1)=='barang-pimpinan' ) active @endif">
                            <a class="d-flex align-items-center" href="{{ route('barang-pimpinan.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">Usulan Baru</span>
                            </a>
                        </li>
                       <li class="@if (Request::segment(1)=='barang-pimpinan-arsip' ) active @endif">
                            <a class="d-flex align-items-center" href="{{ route('barang-pimpinan.arsip') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Edit">Arsip Usulan</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class=" nav-item @if (Request::segment(1)=='galeri' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('wilayah.index') }}">
                        <i data-feather='image'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Galeri</span>
                    </a>
                </li> --}}

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Menu</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item @if (Request::segment(1)=='profile-pendamping' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('profile-pendamping.index') }}">
                        <i data-feather='user'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Profile</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center"href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i data-feather='log-out'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Logout</span>
                    </a>
                </li>


            </ul>
        </div>
        @elserole('lansia')
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item @if (Request::segment(1)=='dashboard' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Dashboard</span>
                    </a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item @if (Request::segment(1)=='pengajuan' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('pengajuan.index') }}">
                        <i data-feather="feather"></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Pengajuan</span>
                    </a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Menu</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item @if (Request::segment(1)=='profile-pendamping' ) active @endif">
                    <a class="d-flex align-items-center" href="{{ route('profile-pendamping.index') }}">
                        <i data-feather='user'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Profile</span>
                    </a>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center"href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i data-feather='log-out'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Logout</span>
                    </a>
                </li>


            </ul>
        </div>
        @endhasrole

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

        @csrf
    </form>
