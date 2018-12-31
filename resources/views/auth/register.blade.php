@extends('layouts.app')

@section('content')
 <h1>Material Register Form</h1>

    <div class="w3l-login-form">
        <h2>Register Here</h2>
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class=" w3l-form-group">
            <label>Firm name:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Firm name" class="form-control{{ $errors->has('firm_name') ? ' is-invalid' : '' }}" name="firm_name" value="{{ old('firm_name') }}" required autofocus>
                @if ($errors->has('firm_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firm_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>  
        <div class=" w3l-form-group">
            <label>Username:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div> 
        <div class=" w3l-form-group">
            <label>Email:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class=" w3l-form-group">
            <label>Firm address:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Firm address" class="form-control{{ $errors->has('firm_address') ? ' is-invalid' : '' }}" name="firm_address" value="{{ old('firm_address') }}" required>
                @if ($errors->has('firm_address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firm_address') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class=" w3l-form-group">
            <label>GST number:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="GST Number" class="form-control{{ $errors->has('gst_number') ? ' is-invalid' : '' }}" name="gst_number" value="{{ old('gst_number') }}" required>
                @if ($errors->has('gst_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gst_number') }}</strong>
                    </span>
                @endif
            </div>
        </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password confirmation:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input placeholder="Password confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button type="submit">Register</button>
        </form>
        <p class=" w3l-register-p">Already have an account?<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></p>
    </div>

@endsection

