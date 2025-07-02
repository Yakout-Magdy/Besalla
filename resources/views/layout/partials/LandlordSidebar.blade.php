<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar" style="height: auto">
        <div class="sideCover"></div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Sidebar user panel -->
                <li class="nav-item user-panel mt-3 mb-3 d-flex align-items-center">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        {{-- <a href="{{ route('dashboard.landlord.admins.info', Auth::guard('landlord')->user()->id) }}"
                            class="d-block">{{ Auth::guard('landlord')->user()->name }}</a> --}}
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.index') }}" class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-building nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.tenants') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.roles.index') }}" class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-user-shield nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.roles') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.admins.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon fas fa-users mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.admins') }}</p>
                    </a>
                </li>

                <!-- Daily Tenants Report Link -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.tenantsReport') }}"
                        class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-chart-line nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.dailyTenantReport') }}</p>
                    </a>
                </li>

                <!-- Packages -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.packages.index') }}"
                        class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-box nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.packages') }}</p>
                    </a>
                </li>

                <!-- Subscriptions -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.subscriptions.index') }}"
                        class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-clipboard-list nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.subscriptions') }}</p>
                    </a>
                </li>

                <!-- Inquiries -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.inquiries.index') }}"
                        class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-envelope nav-icon mr-2"></i>
                        <p class="m-0"> {{ __('dashboard/messages.inquiries') }}</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.landlord.logout') }}" class="nav-link d-flex align-items-center">
                        <i class="fa fa-sign-out nav-icon mr-2" aria-hidden="true"></i>
                        <p class="m-0">{{ __('dashboard/messages.logout') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
