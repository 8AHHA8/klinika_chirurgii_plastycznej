<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Plastic Surgery Clinic</title>
    <link rel="stylesheet" href="styles.css">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="image-background">
    <div class="container moveup">
        <h1 class="font-semibold sizing line">OUR SERVICES</h1>

        @foreach ($services as $service)
        <div class="service">
            <h2 class="service-name font-semibold">{{ $service->name }}</h2>
            <p class="service-price font-semibold">{{ $service->price }} $</p>
            <p class="service-description font-semibold text-justify">{{ $service->description }}</p>
        </div>
        @endforeach
</div>
</body>
</html>