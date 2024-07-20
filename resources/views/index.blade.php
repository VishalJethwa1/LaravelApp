<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
        <h1 class="text-8xl text-center p-10">Welcome to My App</h1>
    </header>

    <div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="{{route('register-user')}}" method="post" enctype="multipart/form-data" class="form" id="form1">
            
        @csrf
            @if (Session::has('success'))
            <div class="text-green-600">
                {{Session::get('success')}}
            </div>
            @endif
            
            @if (Session::has('fail'))
                <div class="text-red-600">
                    {{Session::get('fail')}}
                </div>
            @endif

			<h2 class="form__title">Sign Up</h2>
			<input type="text" name="name" placeholder="Fullname" class="input" />
            <span class="text-red-600">
                @error('name')
                    {{$message}}
                @enderror
            </span>
			<input type="email" name="email" placeholder="Email" class="input" />
            <span class="text-red-600">
                @error('email')
                 {{$message}}
                @enderror
            </span>
			<input type="password" name="password" placeholder="Password" class="input" />
            <span class="text-red-600">
            @error('password')
                {{$message}}
            @enderror
            </span>
            <br>
			<button type="submit" class="btn">Sign Up</button>
		</form>
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="{{route('login-user')}}" method="post" enctype="multipart/form-data" class="form" id="form2">
            @csrf
            
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif

            @if(Session::has('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

			<h2 class="form__title">Sign In</h2>
			<input type="email" name="email" placeholder="Email" class="input" />
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
            
			<input type="password" placeholder="Password" class="input" />
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
			<a href="#" class="link">Forgot your password?</a>
			<button type="submit" class="btn">Sign In</button>
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<button class="btn" id="signIn">Sign In</button>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

</body>
</html>