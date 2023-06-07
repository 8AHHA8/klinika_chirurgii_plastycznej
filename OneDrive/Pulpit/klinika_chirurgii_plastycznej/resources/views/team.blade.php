<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors - Plastic Surgery Clinic</title>
    <link rel="stylesheet" href="styles.css">

<link href="{{ asset('css/team.css') }}" rel="stylesheet">
</head>

<body>
<div class="image-background">
    <div class="container movedown">
        <h1 class="typczcionka">Meet Our Doctors</h1>

        @foreach ($doctors as $doctor)
    <div class="doctor">
        <img src="{{ asset($doctor->image) }}" class="doctor-image">
        <div class="doctor-info">
            <h2 class="doctor-name typczcionka">{{ $doctor->name }} {{ $doctor->surname }}</h2>
            <p class="doctor-specialty typczcionka">{{ $doctor->specialty }}</p>
            <p class="doctor-description typczcionka">{{ $doctor->description }}</p>
        </div>
    </div>
        @endforeach
    </div>
</div>
</body>
</html>
