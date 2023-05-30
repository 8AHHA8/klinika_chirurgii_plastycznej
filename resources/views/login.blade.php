<!DOCTYPE html>
<html lang="en">
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
.login-form input[type="password"] {
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
padding: 0;
}

.moveup {
transform: translateY(-20rem);
}

/* Additional styles for the back button */
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="typczcionka">User Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="image-background">
    <div class="container moveup">
        <h1>User Login</h1>
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <label for="e-mail" class="typczcionka">E-mail</label>
            <input type="text" id="e-mail" name="e-mail" placeholder="Enter your e-mail" required>

            <label for="password" class="typczcionka">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit" class="typczcionka">Log In</button>

            @error('e-mail')
                <div class="alert alert-danger typczcionka">
                    {{ $message }}
                </div>
            @enderror
        </form>
    </div>
</div>
</body>
</html>