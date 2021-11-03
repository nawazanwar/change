<header class="border-bottom p-2">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home') }}" class="d-flex align-items-center mb-2 mb-lg-0  text-decoration-none">
                <strong>{{  config('app.name') }}</strong>
            </a>
            @guest
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    @foreach(\App\Enum\GuestNavEnum::getTranslationKeys() as $key=>$value)
                        <li><a href="#" class="nav-link px-2">{{$value}}</a></li>
                    @endforeach
                </ul>
            @endguest
            @guest
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">{{__('change.login')}}</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">{{__('change.signup')}}</a>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</header>
