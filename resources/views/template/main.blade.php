<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @section('header')
    <!-- <nav class="w-full p-3 shadow-lg">
        <ul>
            <li><a href="">home</a></li>
            <li><a href="">about</a></li>
            <li><a href="">contact us</a></li>
            <li><a href="">pricing</a></li>
        </ul>
    </nav> -->

    <div class="w-full flex flex-wrap p-3 flex-col items-end shadow-lg bg-gray-100">
     <div class="flex flex-wrap items-center text-base justify-center uppercase mr-20">
       <a href="" class="mr-5">home</a>
       <a href="" class="mr-5">products</a>
       <a href="" class="mr-5">pricing</a>
       <a href="" class="mr-5">about</a>
       <a href="" class="mr-5">contact us</a>
     </div>
    </div>
    @show

    @section('footer')
    <footer class="">

    </footer>
    @show


</body>
</html>