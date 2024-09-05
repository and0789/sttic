<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
        <a href="{{ route('admin') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Menu Kampus -->
    <x-admin.menu.style.menu-header>
        Menu Kampus
    </x-admin.menu.style.menu-header>

    <li class="menu-item">
        <a href=" {{ route('campus-identity.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Account Settings">Identitas Kampus</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">Jurusan</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
            <div data-i18n="Misc">About Us</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Sambutan Rektor</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Visi dan Misi</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Menu Informasi Kampus -->
    <x-admin.menu.style.menu-header>
        Informasi
    </x-admin.menu.style.menu-header>

    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Pengumuman</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Kategori Informasi</div>
        </a>
    </li>

    <!-- Menu Informasi Kampus -->
    <x-admin.menu.style.menu-header>
        Blog
    </x-admin.menu.style.menu-header>

    <!-- Menu Blog -->
    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Buat Artikel Baru</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Kategori Artikel</div>
        </a>
    </li>

    <!-- Menu User-->
    <x-admin.menu.style.menu-header>
        Setting App
    </x-admin.menu.style.menu-header>

    <li class="menu-item">
        <a href="cards-basic.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Pengguna</div>
        </a>
    </li>

</ul>
