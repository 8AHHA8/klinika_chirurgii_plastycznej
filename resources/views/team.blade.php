<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors - Plastic Surgery Clinic</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 20px;
        }

        .doctor {
            display: flex;
            margin-bottom: 30px;
        }

        .doctor-image {
            width: 200px;
            height: 200px;
            margin-right: 20px;
            object-fit: cover;
        }

        .doctor-info {
            flex: 1;
        }

        .doctor-name {
            font-size: 20px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 10px;
        }

        .doctor-specialty {
            font-size: 16px;
            color: #666666;
            margin-bottom: 10px;
        }

        .doctor-description {
            font-size: 17px;
            color: black;
            text-align: justify;
        }

        .image-background {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: flex-end;
            background-image: url("{{asset('photos/background_corridor.jpg')}}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 0;
        }

        .movedown {
            transform: translateY(3rem);
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .wymiar {
            width: 80px;
        }

        .wymiar:hover {
            transition: font-size 700ms ease;
            width: 90px;
        }

        .typczcionka {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
<div class="image-background">
    <div class="container movedown">
        <h1>Meet Our Doctors</h1>

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
