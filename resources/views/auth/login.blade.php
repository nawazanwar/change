@extends('layouts.app')
@section('page_title', __('change.login'))
@section('page_meta_description', __('change.login'))
@section('page_meta_keywords', __('change.login'))
@section('content')
    <div class="container auth-container">
        <div class="d-flex justify-content-center my-5">
            <div class="card auth-card border shadow main-wrapper p-3">
                <h1 class="card-header bg-transparent text-center border-bottom-0">
                    {{ __('change.login') }}
                </h1>
                <div class="card-body">
                    @include('components.auth.social-login-buttons', ['for'=>'login'])
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group shadow-sm pb-2">
                            <div class="input-group mb-2">
                                <span class="input-group-text {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                      id="addon-wrapping">
                                    <i class="fa fa-envelope fa-2x"></i>
                                </span>
                                <input type="email" name="email"
                                       class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       value="{{ old('email') }}"
                                       placeholder="{{ __('change.enter_email') }}"
                                       autofocus
                                       autocomplete="off"
                                       required="required">
                            </div>
                            @if ($errors->has('email'))
                                <div class="error" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group shadow-sm">
                            <div class="input-group mb-2">
                                <span class="input-group-text {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                      id="addon-wrapping">
                                    <i class="fa fa-lock fa-2x"></i>
                                </span>
                                <input type="password" name="password"
                                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('change.ph_pass') }}"
                                       autocomplete="off"
                                       required="required">
                            </div>
                            @if ($errors->has('password'))
                                <div class="error" role="alert">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <div class="d-flex justify-content-between py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="remember"
                                       {{ old('remember') ? 'checked' : '' }} id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    {{ __('change.remember') }}
                                </label>
                            </div>
                            <div class="form-check">
                                <a href="{{ route('password.request') }}" class="text-body remember-text">
                                    {{ __('change.forget_pass') }}
                                </a>
                            </div>
                        </div>

                        <div class="d-block py-2">
                            <button type="submit" class="btn btn-lg btn-primary w-100">
                                {{ __('change.login') }}
                            </button>
                        </div>
                        <hr>
                        <div class="form-group py-2 text-center mb-0 dont-have-account-holder">
                            <p>{{ __('change.dont_have_an_account') }}
                                <a class="text-dark font-weight-bold"
                                   href="{{ route('register') }}">{{ __('change.signup') }}</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
