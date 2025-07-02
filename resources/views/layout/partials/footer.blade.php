@php
    use Spatie\Multitenancy\Models\Tenant;
@endphp
<footer class="main-footer">
    <div class="pull-right" style="float: right !important;">
        Powered By: <strong><a href="https://bdaiat.com" target="_blank">Bdaiat Technologies</a></strong>
    </div>
    <div class="pull-left hidden-xs">
        @if (Tenant::current())
            Copyright &copy; {{ date('Y') }} <strong><a target="_blank" href="https://{{ Tenant::current()->name }}.besalla.com/">
                    {{ Tenant::current()->name }}</a>.</strong> All rights reserved. - <b>Version</b> 1.0.0
        @else
            Copyright &copy; {{ date('Y') }} <strong><a target="_blank" href="https://besalla.com/">
                    Besalla</a>.</strong> All rights reserved. - <b>Version</b> 1.0.0
        @endif
    </div>
</footer>
