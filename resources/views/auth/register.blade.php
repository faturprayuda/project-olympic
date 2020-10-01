@extends('backend.layouts.login_layout')
@section('main-content')

<div class="section-fullscreen bg-image"
    style="background-image: url({{asset('component/assets/images/app-landing-bg.jpg')}})">
    <div class="bg-black-04">
        <div class="container text-center">
            <div class="position-middle">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                        <h4 class="font-weight-light margin-bottom-30">Register</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- name --}}
                            <input placeholder="Name" id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            {{-- email --}}
                            <input placeholder="Email" id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            {{-- password --}}
                            <input placeholder="Password" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            {{-- confirm password --}}
                            <input placeholder="Confirm Password" id="password-confirm" type="password"
                                class="form-control" name="password_confirmation" required autocomplete="new-password">

                            <button class="button button-lg button-outline-white-2 button-fullwidth">Create
                                Account</button>
                        </form>
                        <div class="margin-top-30">
                            <ul class="list-unstyled">
                                <li><a href="{{route('login')}}">Have Account?</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end position-middle -->
        </div><!-- end container -->
    </div>
</div>
@endsection