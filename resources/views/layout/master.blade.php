@php
    use Spatie\Multitenancy\Models\Tenant;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="app-locale" content="{{ app()->getLocale() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('layout.partials.head-scripts')
    <style>
        :root {
            --company-color: {{ optional(Cache::get('settings') ?? collect())->firstWhere('key', 'color')->value ?? '#fff200' }};
        }

        /* :root {
            @if (auth()->user()?->tenant)
                --company-color: {{ optional(Cache::get('settings')->firstWhere('key', 'color'))->value ?? '#fff200' }};
            @else
                --company-color: #fff200;
            @endif
        } */
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #ecf0f4">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">

            <!-- Loader -->
            <div id="loader"
                style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

        @include('layout.partials.navbar')
        @if (Tenant::current())
            @include('layout.partials.TenantSidebar')
        @else
            @include('layout.partials.LandlordSidebar')
        @endif
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 font-weight-bold">@yield('name')</h1>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-2">
                            <ol class="breadcrumb float-sm-left">
                                @section('breadcrumb')
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('dashboard.tenant.index') }}">{{ __('dashboard/messages.home') }}</a>
                                    </li>
                                @show
                            </ol>
                        </div><!-- /.col -->
                        <div class="col-sm-10">
                            @yield('addButton')
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @yield('content')
        </div>
        @include('layout.partials.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('layout.partials.footer-scripts')
    @stack('scripts')
</body>

</html>
