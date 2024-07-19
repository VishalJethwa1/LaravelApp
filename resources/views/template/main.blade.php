<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @section('header')
    <div class="w-full grid grid-cols-2 p-3 shadow-lg bg-stone-700 text-stone-300">
        <a href="{{route('home')}}" class="ml-20"><img src="/images/book-icon.png" height="65px" width="65px" alt=""></a>
     <div class="flex items-center place-content-end text-base uppercase mr-20">    
       <a href="" class="mr-8">home</a>
       <a href="" class="mr-8">products</a>
       <a href="" class="mr-8">pricing</a>
       <a href="" class="mr-8">about</a>
       <a href="" class="mr-8">contact us</a>
       <a href="{{route('register-user')}}" class="mr-8">Sign up</a>
       <!-- <a href="{{route('register-user')}}" class="mr-8">Sign in</a> -->
     </div>
    </div>
    @show

    @section('content')
    <div class="container mx-auto p-5 bg-stone-100 h-screen ">
        
    </div>
    @show


    @section('footer')
    <footer class="w-full p-5 columns-6 bg-stone-800 h-40 text-stone-400 text-center">
        <ul>
            <li>First</li>
            <li>Second</li>
            <li>Third</li>
            <li>Fourth</li>
            <li>Fifth</li>
            <li>Sixth</li>
        </ul>
    </footer>
    @show


</body>
</html>