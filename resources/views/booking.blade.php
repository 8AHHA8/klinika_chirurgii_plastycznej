<!DOCTYPE html>
<html lang="en">
<head>
    @include('flatpickr::components.style')
    @include('flatpickr::components.script')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet">
    <title>User Booking</title>
</head>
<body>
<div class="image-background">
    <div class="container moveup">
        <h1 class="typczcionka">BOOKING</h1>
        <form class="login-form" action="{{ route('booking') }}" method="POST">
            @csrf
            <label for="e-mail" class="typczcionka">E-mail</label>
            <input type="text" id="e-mail" name="e-mail" placeholder="Enter your e-mail" required>

            <label for="phone_number" class="typczcionka">Phone number</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>

            <label for="service" class="typczcionka">Select a Service</label>
            <select id="service" name="service" class="typczcionka">
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">
                        {{ $service->name }} - {{ $service->price }}$
                    </option>
                @endforeach
            </select>

            <label for="date" class="typczcionka">Select a Date</label>
            <input type="text" id="datepicker" name="date" required>

            <button type="submit">Book Service</button>

            @if ($errors -> any())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif

        </form>
    </div>
</div>

@include('flatpickr::components.script')
<script>
    fetch('/disabled-dates')
    .then(response => response.json())
    .then(disabledDates => {
        flatpickr("#datepicker", {
            disable: disabledDates,
        });
    });
</script>
</body>
</html>
