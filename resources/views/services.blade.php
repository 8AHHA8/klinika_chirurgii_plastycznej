<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Plastic Surgery Clinic</title>
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
    text-align: center;
    height: 875px; 
    overflow-y: scroll; 
}

.container::-webkit-scrollbar {
    width: 8px; /* szerokość paska przewijania */
}

.container::-webkit-scrollbar-track {
    background-color: transparent; /* tlo paska przewijania */
}

.container::-webkit-scrollbar-thumb {
    background-color: #ccc; /* kolor paska przewijania */
    border-radius: 4px; /* zaokrąglenie rogów paska przewijania */
}

.container::-webkit-scrollbar-thumb:hover {
    background-color: #999; /* kolor paska przewijania po najechaniu */
}

/* stylowanie dla listy usług */
.service {
    margin-bottom: 20px;
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

.wymiar {
    width: 80px;
}

.wymiar:hover {
    transition: font-size 700ms ease;
    width: 90px;
}

.typczcionka {
    font-family: Arial, Helvetica, sans-serif;
    color: black;
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
}

.wymiarowosc{
    font-size: 2rem;
}

.linia {
    border-bottom: 1px solid gray;
    padding-bottom: 20px;
}

    </style>
</head>
<body>
<div class="image-background">
    <div class="container">
        <h1 class="typczcionka wymiarowosc linia">OUR SERVICES</h1>

        @foreach ($services as $service)
        <div class="service">
            <h2 class="service-name typczcionka">{{ $service->name }}</h2>
            <p class="service-price typczcionka">{{ $service->price }} $</p>
            <p class="service-description typczcionka">{{ $service->description }}</p>
        </div>
        @endforeach
</div>
</body>
</html>