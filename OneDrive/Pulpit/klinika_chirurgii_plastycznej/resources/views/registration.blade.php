<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Plastic Surgery Clinic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom styles for patient registration */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            height: 770px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container:hover {
            transition: 700ms ease;
            width: 502px;
            height: 772px;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background-color: #333333;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #222222;
        }

        /* Additional styles for the back button */
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 80px;
        }

        .wymiar{
            width: 80px;
        }

        .wymiar:hover{
            transition: font-size 700ms ease;
            width: 90px;
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
            padding: 0;
        }

        .moveup {
            transform: translateY(-5rem);
        }
        .typczcionka{
            font-family: Arial, Helvetica, sans-serif;
        }

        .shoveitdown{
            transform: translateY(3rem);
        }
    </style>
</head>
<body>
    <div class="image-background">
    <div class="container moveup">
        <h1 class="typczcionka">Patient Registration</h1>
        <form>
            <label for="firstName" class="typczcionka">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            
            <label for="lastName" class="typczcionka">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            
            <label for="pesel" class="typczcionka">PESEL:</label>
            <input type="text" id="pesel" name="pesel" required>
            
            <label for="phoneNumber" class="typczcionka">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required>

            <label for="email" class="typczcionka">E-mail:</label>
            <input type="text" id="email" name="email" required>

            <label for="password" class="typczcionka">Password:</label>
            <input type="text" id="password" name="password" required>
            
            <input type="submit" value="Register" class="shoveitdown">
        </form>
    </div>
    </div>
</body>
</html>