<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar" style="height: auto">
        <div class="sideCover"></div>
        <!-- Sidebar user panel -->
        <span class="logo-mini" style="display: none;"><img src="{{ asset('adminPanel/img/besallaLogo.png') }}"
                style="width: 100%; margin: 10px auto;"></span>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        {{-- <a href="#" class="d-block">{{ Auth::guard('tenant')->user()->name }}</a> --}}
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.tenant.profile') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon fa-solid fa-user mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.profile') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center">
                        <i class="nav-icon fas fa-users mr-2"></i>
                        <p class="m-0">
                            {{ __('dashboard/messages.users') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.users.index') }}" class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-user-group mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.clients') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.admins.index') }}" class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-user-group mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.admins') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.employees.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-user-group mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.employees') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.classifications.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-user-group mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.classifications') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.addresses.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon fa-solid fa-location-dot mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.addresses') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.branches.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon fa-solid fa-building mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.branches') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.orders.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon fa-solid fa-plus-circle mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.orders') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center">
                        <i class="nav-icon fas fa-utensils mr-2"></i>
                        <p class="m-0">
                            {{ __('dashboard/messages.menu') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('dashboard.categories.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-list mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.categories') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.additionalgroups.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-object-group mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.additionalGroups') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.additionals.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-plus-circle mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.additionals') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.products.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-boxes-stacked mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.products') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.sizes.index') }}" class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-ruler mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.sizes') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.meals.index') }}" class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-hamburger mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.meals') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dashboard.boxes.index') }}"
                                class="nav-link d-flex align-items-center">
                                <i class="nav-icon fa-solid fa-box-open mr-2"></i>
                                <p class="m-0">{{ __('dashboard/messages.boxes') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.countries.index') }}" class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-globe nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.countries') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.cities.index') }}" class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-city nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.cities') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.areas.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon fa-solid fa-chart-area mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.areas') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.banners.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon mr-2 fa-solid fa-image"></i>
                        <p class="m-0">{{ __('dashboard/messages.banners') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.cobones.index') }}" class="nav-link d-flex align-items-center">
                        <i class="nav-icon mr-2 fa-solid fa-money-bill-1"></i>
                        <p class="m-0">{{ __('dashboard/messages.cobones') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.settings.index') }}" class="nav-link d-flex align-items-center">
                        <i class="fa fa-cog nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.settings') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard.roles.index') }}" class="nav-link d-flex align-items-center">
                        <i class="fa-solid fa-user-shield nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.roles') }}</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.tenant.logout') }}" class="nav-link d-flex align-items-center">
                        <i class="fa fa-sign-out nav-icon mr-2"></i>
                        <p class="m-0">{{ __('dashboard/messages.logout') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
