<div class="d-block py-2">
    <a class="btn btn-lg btn-block border d-flex align-items-center shadow-sm"
       href="{{ route('social-login',['facebook']) }}">
        <i class="fa fa-facebook fa-2x me-3"></i>
        @if($for === 'register')
            {{ __('change.sing_up_with_fb') }}
        @else
            {{ __('change.login_with_fb') }}
        @endif
    </a>
</div>

<div class="d-block py-2">
    <a class="btn btn-lg btn-block border d-flex align-items-center shadow-sm"
       href="{{ route('social-login',['google']) }}">
        <i class="fa fa-google fa-2x me-2"></i>
        @if($for === 'register')
            {{ __('change.sing_up_with_gmail') }}
        @else
            {{ __('change.login_with_gmail') }}
        @endif
    </a>
</div>

<div class="d-block py-2">
    <a class="btn btn-lg btn-block border d-flex align-items-center shadow-sm"
       href="{{ route('social-login',['linkedin']) }}">
        <i class="fa fa-linkedin fa-2x me-2"></i>
        @if($for === 'register')
            {{ __('change.sing_up_with_linkedin') }}
        @else
            {{ __('change.login_with_linkedin') }}
        @endif
    </a>
</div>

