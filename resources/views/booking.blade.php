<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        /* Reset styles */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        width: 25rem;
        margin: 0 auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-form label {
        display: block;
        margin-bottom: 8px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form select,
    .login-form input[type="date"],
    .login-form input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .login-form button {
        display: block;
        width: 100%;
        padding: 1rem;
        margin-top: 2rem;
        background-color: #333333;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .login-form button:hover {
        background-color: #555555;
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
    }

    .moveup {
        transform: translateY(-15rem);
    }

    .back-button {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 80px;
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
    <a class="back-button" href="http://127.0.0.1:8000"><img src="{{asset('photos/powrot.png')}}" alt="Back to Homepage" class="wymiar"></a>
    <div class="container moveup">
        <h1 class="typczcionka">BOOKING</h1>
        <form class="login-form">
            <label for="username" class="typczcionka">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password" class="typczcionka">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="service" class="typczcionka">Select a Service</label>
            <select id="service" name="service">
            <option value="liposuction" class="typczcionka">Liposuction</option>
            <option value="facelift" class="typczcionka">Facelift</option>
            <option value="rhinoplasty" class="typczcionka">Rhinoplasty</option>
            <option value="eyelid-surgery" class="typczcionka">Eyelid Surgery</option>
            <option value="lip-augmentation" class="typczcionka">Lip Augmentation</option>
            <option value="body-lift" class="typczcionka">Body Lift</option>
            <option value="brow-lift" class="typczcionka">Brow Lift</option>
            <option value="liposculpture" class="typczcionka">Liposculpture</option>
            <option value="laser-hair-removal" class="typczcionka">Laser Hair Removal</option>
            <option value="chemical-peel" class="typczcionka">Chemical Peel</option>
            <option value="dermal-fillers" class="typczcionka">Dermal Fillers</option>
            <option value="varicose-vein-treatment" class="typczcionka">Varicose Vein Treatment</option>
            <option value="hair-transplantation" class="typczcionka">Hair Transplantation</option>
            <option value="botox-injections" class="typczcionka">Botox Injections</option>
            <option value="tummy-tuck" class="typczcionka">Tummy Tuck</option>
            <option value="microdermabrasion" class="typczcionka">Microdermabrasion</option>
            <option value="skin-tightening" class="typczcionka">Skin Tightening</option>
            <option value="body-contouring" class="typczcionka">Body Contouring</option>
            <option value="ear-surgery" class="typczcionka">Ear Surgery</option>
            <option value="laser-resurfacing" class="typczcionka">Laser Resurfacing</option>
            <option value="thigh-lift" class="typczcionka">Thigh Lift</option>
            <option value="arm-lift" class="typczcionka">Arm Lift</option>
            <option value="face-lift" class="typczcionka">Face Lift</option>
            </select>

            <label for="registrationDate" class="typczcionka">Booking Date:</label>
            <input type="date" id="registrationDate" name="registrationDate" required>

            <label for="payment" class="typczcionka">Payment:</label>
            <input type="number" id="fee" name="payment" placeholder="Enter the payment" required>

            <button type="submit">Log In</button>
        </form>
    </div>
</div>
</body>
</html>