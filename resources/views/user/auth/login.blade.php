@extends('layouts.user.focused')

@section('content')

    <div class="login-box">
        <div class="top-text">            
            <h4>{{tr('login')}}</h4>
            <span> Please login to your account </span>
        </div>
        <br>

        <form role="form" method="POST" action="{{ url('/login') }}">
            
            {!! csrf_field() !!}
            <div class="white">
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" required class="form-control" id="email" placeholder="Enter your Email Address">
                    @if($errors->has('email'))
                        <span class="form-error"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>
                <hr>
                <div class="form-group">
                    <label for="pwd">PASSWORD</label>
                    <input type="password" name="password" required class="form-control" id="pwd" placeholder="Enter your Account Password">
                    <span class="form-error">
                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif
                    </span>
                </div> 
            </div>
            <br>
            <div class="btn-div">
                {{-- <button type="submit" class="btn btn-default">{{tr('login')}}</button> --}}
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </form>                
        <p class="help"><a href="{{route('user.register.form')}}">{{tr('new_account')}}</a></p>
        <p class="help"><a href="{{ url('/password/reset') }}">{{tr('forgot_password')}}</a></p>
    </div>

    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    
@endsection
