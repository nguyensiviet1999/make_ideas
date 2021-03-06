@extends('auth.lib')
@section('content')

<head>
	<title>Sign up </title>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-color: #80ffaa">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-55 p-b-54">
        <a class="container navbar-brand text-center m-b-23" href="{{ route('homepage') }}"><img height="80" src="./assets/img/favicon.ico"></a>
				<span class="login100-form-title p-b-30">
					Sign Up
				</span>
				<form class="login100-form validate-form" action="{{url('post-register')}}" method="POST">
					{{ csrf_field() }}
					
					<div class="wrap-input100 validate-input m-b-20" data-validate = "Your name is required">
						<span class="label-input100">Your username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						@if ($errors->has('username'))
						 <span class="error">{{ $errors->first('username') }}</span>
						 @endif
					</div>

          <div class="wrap-input100 validate-input m-b-20" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						@if ($errors->has('email'))
							<span class="error">{{ $errors->first('email') }}</span>
						@endif
					</div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Password is required">
						<span class="label-input100">Password</span>
						      <input class="input100" id="txtNewPassword" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						@if ($errors->has('password'))
							<span class="error">{{ $errors->first('password') }}</span>
						@endif
					</div>

          <div class="wrap-input100 validate-input m-b-30" data-validate="Confirm password is required">
						<span class="label-input100">Confirm Password</span>
						      <input class="input100" id="txtConfirmPassword" type="password" name="confirm_pass" placeholder="Type your confirm password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						@if ($errors->has('confirm_pass'))
							<span class="error">{{ $errors->first('confirm_pass') }}</span>
						@endif
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

          <div class="flex-col-c p-t-35">
						<span class="txt1">
              <a href="{{ route('signin') }}" class="txt2 " style="font-weight: bold; font-size: 18px;">
  							Sign In Instead
  						</a>
						</span>
					</div>

					<!-- <div class="txt1 text-center p-b-20">
						<span>
							Or Sign In Using
						</span>
					</div> -->

					<!-- <div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div> -->

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
@endsection
