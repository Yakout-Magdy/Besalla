       @php
           use Spatie\Multitenancy\Models\Tenant;
       @endphp
       <!-- Navbar -->
       <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 0;">
           <!-- Left navbar links -->
           <ul class="navbar-nav">
               <li class="nav-item">
                   <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                   @if (Tenant::current())
                       {{-- <a href="{{ route('dashboard.tenant.index') }}"
                           class="nav-link">{{ __('dashboard/messages.home') }}</a> --}}
                       <!-- Brand Logo -->
                       <a href="{{ route('dashboard.tenant.index') }}" class="brand-link">
                           @foreach (Cache::get('settings') as $setting)
                               @if ($setting->key == 'logo')
                                   <img src="{{ Storage::url($setting->value) }}" alt="AdminLTE Logo" id="brand-image"
                                       class="brand-image img-circle elevation-3" style="opacity: .8">
                                   <span class="brand-text font-weight-bold"
                                       style="color: #333">{{ config('app.name') }}</span>
                               @endif
                           @endforeach
                       </a>
                   @else
                       {{-- <a href="{{ route('dashboard.landlord.index') }}"
                           class="nav-link">{{ __('dashboard/messages.home') }}</a> --}}

                       <!-- Brand Logo -->
                       <a href="{{ route('dashboard.landlord.index') }}" class="brand-link">
                           <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" id="brand-image"
                               class="brand-image img-circle elevation-3" style="opacity: .8">
                           <span class="brand-text">{{ config('app.name') }}</span>
                       </a>
               </li>
               @endif
               {{-- <li class="nav-item d-none d-sm-inline-block">
                   <a href="" class="nav-link">{{ __('dashboard/messages.contact') }}</a>
               </li> --}}
           </ul>

           <!-- Right navbar links -->
           <ul class="navbar-nav ml-auto">
               @if (Tenant::current())
                   <li class="nav-item">
                       <a href="{{ route('dashboard.tenant.logout') }}" class="nav-link d-flex align-items-center">
                           <i class="fa fa-sign-out nav-icon mr-2"></i>
                       </a>
                   </li>
               @else
                   <!-- Logout -->
                   <li class="nav-item">
                       <a href="{{ route('dashboard.landlord.logout') }}" class="nav-link d-flex align-items-center">
                           <i class="fa fa-sign-out nav-icon mr-2" aria-hidden="true"></i>
                       </a>
                   </li>
               @endif
           </ul>
       </nav>
       <!-- /.navbar -->
