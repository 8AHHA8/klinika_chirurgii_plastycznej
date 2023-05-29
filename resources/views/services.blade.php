<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Plastic Surgery Clinic</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 20px;
        }

        .dostosuj {
            font-size: 16px;
            color: #666666;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
        
        .wymiar{
            width: 80px;
        }

        .wymiar:hover{
            transition: font-size 700ms ease;
            width: 90px;
        }
        
        .typczcionka{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<a class="back-button" href="http://127.0.0.1:8000"><img src="{{asset('photos/powrot.png')}}" alt="Back to Homepage" class="wymiar"></a>
    <div class="container">
        <h1 class="typczcionka">SOME OF OUR SERVICES</h1>
        <p class="dostosuj typczcionka">DISCLAIMER: SURGERIES LISTED HERE ARE NOT THE ONLY ONES WE PERFORM</p>

        @foreach ($services as $service)
        <div class="service">
            <h2 class="service-name typczcionka">{{ $service->name }}</h2>
            <p class="service-price typczcionka">{{ $service->price }} $</p>
            <p class="service-description typczcionka">{{ $service->description }}</p>
        </div>
        @endforeach
</body>
</html>