<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
 <main class="p-3">
  <h1 class="font-extrabold text-3xl text-center">Process URL</h1>
   @yield('content')
  </main> 
</body>
</html> 