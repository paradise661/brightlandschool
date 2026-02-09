<style>
    .dot-icon {
        font-size: 8px;
    }
</style>
<aside class="layout-menu menu-vertical menu bg-menu-theme" id="layout-menu">
    <div class="app-brand demo p-0">
        <a class="app-brand-link mx-auto my-0" href="{{ route('dashboard') }}" target="_blank">
            {{-- @if ($setting['site_main_logo']) --}}
            <img style="max-width: 210px;" src="{{ asset('admin/assets/images/logo.png') }}" alt="logo">
            {{-- @else --}}
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">ParadiseCourse</span> --}}
            {{-- @endif --}}
        </a>

        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" href="javascript:void(0);">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <br>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'student' ? 'active' : '' }}">
            <a class="menu-link text-decoration-none" href="{{ route('student.index') }}">
                <i class="menu-icon tf-icons bx bxs-id-card"></i>
                <div data-i18n="Accordion">Students</div>
            </a>
        </li>
        <li class="menu-item {{ Request::segment(2) == 'contacts' ? 'active' : '' }}">
            <a class="menu-link text-decoration-none" href="{{ route('contacts.index') }}">
                <i class="menu-icon tf-icons bx bxs-contact"></i>
                <div data-i18n="Accordion">Contacts</div>
            </a>
        </li>
        <!-- CMS -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">CMS</span></li>
        <!-- Cards -->

        <li
            class="menu-item {{ Request::segment(2) == 'downloads' || Request::segment(2) == 'downloads-category' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none menu-toggle" href="#">
                <i class="menu-icon tf-icons bx bxs-download"></i>
                <div data-i18n="General Setting">Downloads</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::segment(2) == 'downloads-category' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('downloads-category.index') }}">
                        <i class="menu-icon tf-icons bx bx-category"></i>
                        <div>Category</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'downloads' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('downloads.index') }}">
                        <i class="menu-icon tf-icons bx bxs-circle dot-icon"></i>
                        <div data-i18n="Accordion">Downloads</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ Request::segment(2) == 'notices' || Request::segment(2) == 'notices-category' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none menu-toggle" href="#">
                <i class="menu-icon tf-icons bx bxs-info-circle"></i>
                <div data-i18n="General Setting">Notices</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::segment(2) == 'notices-category' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('notices-category.index') }}">
                        <i class="menu-icon tf-icons bx bx-category"></i>
                        <div>Category</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'notices' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('notices.index') }}">
                        <i class="menu-icon tf-icons bx bxs-circle dot-icon"></i>
                        <div data-i18n="Accordion">Notices</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ Request::segment(2) == 'blog' || Request::segment(2) == 'blog-category' ? 'active open' : '' }}">
            <a class="menu-link text-decoration-none menu-toggle" href="#">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="General Setting">Blogs</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::segment(2) == 'blog-category' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('blog-category.index') }}">
                        <i class="menu-icon tf-icons bx bx-category"></i>
                        <div>Category</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::segment(2) == 'blog' && Request::segment(3) == null ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('blog.index') }}">
                        <i class="menu-icon tf-icons bx bxs-circle dot-icon"></i>
                        <div>All Blog</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::segment(2) == 'blog' && Request::segment(3) == 'create' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('blog.create') }}">
                        <i class="menu-icon tf-icons bx bxs-circle dot-icon"></i>
                        <div>Create Blog</div>
                    </a>
                </li>
            </ul>

        <li class="menu-item {{ Request::segment(2) == 'album' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('album.index') }}">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="Basic">Albums</div>
            </a>
        </li>

        <!-- General Settings  -->
        <li class="menu-item @if (in_array(Request::segment(2), ['setting', 'slider', 'social', 'page', 'popup', 'partner'])) active open @endif">
            <a class="menu-link menu-toggle text-decoration-none" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="General Setting">Global Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::segment(2) == 'setting' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('admin.setting.index') }}">
                        <div data-i18n="Accordion">Setting</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'slider' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="{{ route('slider.index') }}">
                        <div data-i18n="General Setting">Sliders</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'social' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="#">
                        <div data-i18n="General Setting">Social</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'page' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="#">
                        <div data-i18n="General Setting">Pages</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'popup' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="#">
                        <div data-i18n="General Setting">PopUps</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'partner' ? 'active' : '' }}">
                    <a class="menu-link text-decoration-none" href="#">
                        <div data-i18n="General Setting">Partners</div>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</aside>

<style>
    .menu-vertical .menu-item .menu-link {
        font-size: 16px;
        background-color: rgba(237, 240, 240, 0.233)
    }
</style>
