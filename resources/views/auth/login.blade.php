@extends('backend.layouts.login_layout')
@section('main-content')

<div class="section-fullscreen bg-image"
    style="background-image: url({{asset('component/assets/images/app-landing-bg.jpg')}})">
    <div class="bg-black-04">
        <div class="container text-center">
            <div class="position-middle">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                        <h4 class="font-weight-light margin-bottom-30">Login</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <input placeholder="Email" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input placeholder="Password" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <button class="button button-lg button-outline-white-2 button-fullwidth">Login</button>
                        </form>
                        <div class="margin-top-30">
                            <ul class="list-unstyled">
                                <li><a href="{{route('forgot.pass')}}">Forgot password?</a></li>
                                {{-- <li><a href="{{route('register')}}">Create account</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end position-middle -->
        </div><!-- end container -->
    </div>
</div>
@endsection