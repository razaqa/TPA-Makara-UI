@extends('layout/master')

@section('title', 'Login TPA Makara UI')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="picture-logo">
        <img src="{{asset('picture/logoTPAM.png')}}" alt="Logo TPAM">
     </div>
    <h1 class = "title">Welcome to TPA Makara UI!</h1>
    <h1 class = "sign-in">Sign In</h1>
    <form method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <span class="input-group-btn">
                    <button id= "show_password" class="btn btn-secondary" type="button">
                            <span class="password-icon fa fa-eye"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class=button-section>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
    </form>
    <p class="bottom-auth">New here?
        <a href="{{ route('register') }}">Register here!</a>
    </p>
@endsection

@section('extra-js')

    <script>

        $(function() {
            $("#show_password").click(
                function toggle() {
                    let varPas = $("#password")
                    if (varPas.attr("type") == "password"){
                        varPas.attr("type", "text");
                    }
                    else{
                        varPas.attr("type", "password");
                    }
                    $(".password-icon")
                        .toggleClass("fa-eye")
                        .toggleClass("fa-eye-slash");
                },
            );
        });

    </script>

@endsection
