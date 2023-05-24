<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors - Plastic Surgery Clinic</title>
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

        .doctor-image:hover {
            transition: font-size 700ms ease;
            width: 220px;
            height: 220px;
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
        .doctor-name:hover {
            transition: font-size 700ms ease;
            font-size: 21px;
        }

        .doctor-specialty {
            font-size: 16px;
            color: #666666;
            margin-bottom: 10px;
        }
        .doctor-specialty:hover {
            transition: font-size 700ms ease;
            font-size: 17px;
        }

        .doctor-description {
            font-size: 14px;
            color: #999999;
            text-align: justify;
        }
        .doctor-description {
            font-size: 16px;
        }

        .image-background {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: flex-end;
            background-image: url("{{asset('photos/background_corridor.jpg')}}");
            background-size: fill;
            background-position: center;
            background-repeat: no-repeat;
        }

        .movedown {
            transform: translateY(3rem);
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
    </style>
</head>
<body>
<div class="image-background">
<a class="back-button" href="http://127.0.0.1:8000"><img src="{{asset('photos/powrot.png')}}" alt="Back to Homepage" class="wymiar"></a>
    <div class="container movedown">
        <h1>Meet Our Doctors</h1>

        <div class="doctor">
            <img src="{{asset('photos/klaus.jpg')}}" class="doctor-image">
            <div class="doctor-info">
                <h2 class="doctor-name">Dr. Klaus Lindecker</h2>
                <p class="doctor-specialty">Cosmetic Surgeon</p>
                <p class="doctor-description">Dr. Klaus Lindecker is a renowned cosmetic surgeon known for his exceptional skills in body contouring and aesthetic procedures. 
                    He specializes in helping patients enhance their physical appearance and achieve their desired results through personalized care and innovative techniques.</p>
            </div>
        </div>

        <div class="doctor">
            <img src="{{asset('photos/zofia.jpg')}}" class="doctor-image">
            <div class="doctor-info">
                <h2 class="doctor-name">Dr. Zofia Ratajkowska</h2>
                <p class="doctor-specialty">Plastic Surgeon</p>
                <p class="doctor-description">Dr. Zofia Ratajkowska is a highly skilled plastic surgeon with several years of experience. 
                    She specializes in facial reconstruction and has a passion for helping her patients enhance their natural beauty.</p>
            </div>
        </div>

        <div class="doctor">
            <img src="{{asset('photos/zbigniew.jpg')}}" class="doctor-image">
            <div class="doctor-info">
                <h2 class="doctor-name">Dr. Zbidniew Dąbrowski</h2>
                <p class="doctor-specialty">Facial Plastic Surgeon</p>
                <p class="doctor-description">Dr. Zbigniew Dąbrowski is a skilled facial plastic surgeon with expertise in rhinoplasty and facelift procedures. 
                    He is committed to providing personalized care and helping his patients achieve their aesthetic goals.</p>
            </div>
        </div>

        <div class="doctor">
            <img src="{{asset('photos/anna.jpg')}}" class="doctor-image">
            <div class="doctor-info">
                <h2 class="doctor-name">Dr. Anna Lazarowicz</h2>
                <p class="doctor-specialty">Plastic Surgeon</p>
                <p class="doctor-description">Dr. Anna Lazarowicz is a board-certified plastic surgeon specializing in reconstructive and aesthetic procedures. 
                    She has a gentle and caring approach towards her patients and is dedicated to achieving natural-looking results.</p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>