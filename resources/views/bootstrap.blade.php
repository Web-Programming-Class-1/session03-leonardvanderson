<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <button class ="btn btn-primary">Primary</button>
    
    <div class="container">
        <div class="col-3">
            Kolom 1
        </div>
        <div class="col-6">
            <img src="{{ asset('image/kaminari.jpg')}}" class="img-thumbnail" alt="kaminari">
        </div>
        <div class="col-3">
            Kolom 3
        </div>
    </div>
</body>

</html>