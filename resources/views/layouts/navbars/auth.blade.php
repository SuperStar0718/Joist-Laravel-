<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Joist Dashboard') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Estimate') }}</p>
                </a>
            </li>
            {{-- <li >
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Invoices') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li >
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li >
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Invoices') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Clients') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Items') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Joist Pro') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Reports') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Settings') }}</p>
                </a>
            </li>
            {{-- <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
