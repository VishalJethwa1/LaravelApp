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

    <!-- <main>
        <div class="container mx-auto bg-zinc-200 p-28 shadow-lg">
            <div class="columns-2">

            </div>
        </div>
    </main> -->

    <div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="#" class="form" id="form1">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="User" class="input" />
			<input type="email" placeholder="Email" class="input" />
			<input type="password" placeholder="Password" class="input" />
			<button class="btn">Sign Up</button>
		</form>
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="#" class="form" id="form2">
			<h2 class="form__title">Sign In</h2>
			<input type="email" placeholder="Email" class="input" />
			<input type="password" placeholder="Password" class="input" />
			<a href="#" class="link">Forgot your password?</a>
			<button class="btn">Sign In</button>
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