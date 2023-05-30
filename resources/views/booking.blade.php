<!DOCTYPE html>
<html lang="en">
<head>
    @include('flatpickr::components.style')
    @include('flatpickr::components.script')
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

    .occupied {
        background-color: #ffcccc;
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
        padding: 0;
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

    .flatpickr-day.flatpickr-disabled {
        background-color: red !important;
        color: white !important;
    }
    </style>
</head>
<body>
<div class="image-background">
    <div class="container moveup">
        <h1 class="typczcionka">BOOKING</h1>
        <form class="login-form">
            <label for="username" class="typczcionka">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password" class="typczcionka">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="service" class="typczcionka">Select a Service</label>
            <select id="service" name="service" class="typczcionka">
                @foreach ($bookings->unique('surgery_id') as $booking)
                    @php
                        $surgery = $booking->surgery;
                    @endphp
                    @if ($surgery)
                        <option value="{{ $booking->id }}">
                            {{ $surgery->name }} - {{ $surgery->price }}$
                        </option>
                    @endif
                @endforeach
            </select>

            <label for="date" class="typczcionka">Select a Date</label>
            <input type="text" id="datepicker">
            <script>
                fetch('/disabled-dates')
                .then(response => response.json())
                .then(disabledDates => {
                    flatpickr("#datepicker", {
                        disable: disabledDates,
                    });
                });
            </script>

            <button type="submit">Log In</button>
        </form>
    </div>
</div>

</body>
</html>