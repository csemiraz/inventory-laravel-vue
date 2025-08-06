<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
       
    
</head>
<body data-layout="horizontal" data-topbar="dark">
    <div id="app"></div>

    
    @vite('resources/js/app.js') 
    {{-- @vite('resources/js/assets/js/app.js') --}}
</body>
</html>
