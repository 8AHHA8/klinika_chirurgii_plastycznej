<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Chirurgii Plastycznej</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const images = document.querySelectorAll('.picsize');

            images.forEach((image) => {
                image.addEventListener('mouseover', () => {
                    const audio = new Audio('click.mp3');
                    audio.play();
                });
            });
        });
    </script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const loginOption = document.querySelector('.login-option a');

        const isUserLoggedIn = false;

        if (isUserLoggedIn) {
            loginOption.href = 'http://127.0.0.1:8000/logout';
            loginOption.textContent = 'Log out';
        } else {
            loginOption.href = 'http://127.0.0.1:8000/login';
            loginOption.textContent = 'Login';
        }
    });
</script>

<style>
    .parallax {
    background-image: url("{{asset('photos/background_hospital.jpg')}}");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body >
    <div class="parallax">
    <header class="rozmiar">

        <h1 class="font-semibold doublefont">PLASTIC SURGERY CLINIC FACILITY</h1>
        <p class="font-semibold">YOU CAN CHANGE YOURSELF WITH US</p>

        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ml-6 d-flex justify-content-end moveup">
                    @if (Auth::check())
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium rounded-md dark:text-gray-500 dark:text-gray-400 bg-gray-200 dark:bg-gray-100 hover:text-gray-700 dark:hover:text-gray-300 dark:hover:text-decoration-none focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link class="no-underline" :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link class="no-underline" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                    @else
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="font-semibold inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium rounded-md text-gray-800 dark:text-gray-800 bg-gray-100 dark:bg-gray-100 hover:text-gray-700 dark:hover:text-gray-900 focus:outline-none transition ease-in-out duration-150">
                                    <div>Profile</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('login')">
                                    {{ __('Login') }}
                                </x-dropdown-link>


                                    <x-dropdown-link :href="route('register')">
                                        {{ __('Registration') }}
                                    </x-dropdown-link>

                            </x-slot>
                        </x-dropdown>
                    @endif
                </div>

                @if (session('robber'))
                    <div class="error-message">{{ session('robber') }}</div>
                @endif
    </header>

    <nav>
        <ul>
            <li><a href="/doctors" class="font-semibold">OUR TEAM</a></li>
            <li><a href="/services" class="font-semibold" >SERVICES</a></li>
            <li><a href="/bookings"class="font-semibold">BOOKING</a></li>
        </ul>
    </nav>

    <section>
    <h2 class="font-semibold opinion mv1 mv2">ABOUT US</h2>
    <div class="flex-container">
      <img src="{{asset('photos/kadra.jpg')}}" alt="Lights" class="size-team fonttype mv1">
      <div class="text-container">
    <p class="text-justify font-semibold fontblack mv2">We are a team of experienced plastic surgeons ready to provide you with a comprehensive range of plastic surgery services.
        Our plastic surgery clinic is equipped with state-of-the-art medical equipment, and our specialists have extensive experience and deep knowledge in their field.
        We understand the importance of your trust and sense of security during plastic surgery procedures. Therefore, we prioritize an individual approach to each patient,
        carefully listening to your needs and expectations. Our priority is to ensure the highest quality of medical care and achieve the best possible results.
        Our specialists not only have a solid medical education but also continuously enhance their qualifications by participating in trainings and conferences
         on the latest advancements in plastic surgery. This enables us to offer you the latest techniques and methods tailored to your individual needs.
         We constantly strive to improve our skills and raise the standards of our clinic. We create a place where patients feel comfortable and confident,
         knowing they are in the hands of experienced professionals. We take care to make the entire process, from the first consultation to recovery,
         as comfortable and safe as possible for you. If you are looking for a trusted plastic surgery clinic where your needs are a priority,
         we invite you to visit us. Give us the opportunity to help you achieve your goals and feel more confident in your own skin.</p>
  </div>
</section>

<section >

<h2 class="font-semibold mv1 mv2 opinion">OPINIONS</h2>
<div class="row ">
  <div class="col-md-4">
    <div class="thumbnail centered">
        <img src="{{asset('photos/1.jpg')}}" alt="Lights" class="picsize">
        <div class="caption">
          <p class="size-text fontblack font-semibold centered">
            <b class="biggerfont">Name:</b> Mateusz <br>
            <b class="biggerfont">Gender:</b> Male <br>
            <b class="biggerfont"> Weight:</b> 65 kg <br>
            <b class="biggerfont">Date of surgery:</b> 02.12.2019 <br>
            <b class="biggerfont"> Surgery:</b> Face Reconstruction <br>
            <b class="biggerfont"> Opinion:</b> The plastic surgery clinic successfully transformed my face through reconstruction surgery, boosting my confidence and leaving me extremely satisfied with the results.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail centered">
        <img src="{{asset('photos/2.jpg')}}" alt="Lights" class="picsize">
        <div class="caption">
        <p class="size-text fontblack font-semibold centered">
            <b class="biggerfont">Name:</b> Kacper <br>
            <b class="biggerfont">Gender:</b> Male <br>
            <b class="biggerfont">Weight:</b> 73 kg <br>
            <b class="biggerfont">Date of surgery:</b> 21.09.2021 <br>
            <b class="biggerfont">Surgery:</b> Suction <br>
            <b class="biggerfont">Opinion:</b> The plastic surgery clinic's suction surgery exceeded my expectations, delivering outstanding results and leaving me highly satisfied with the procedure.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail centered">
        <img src="{{asset('photos/3.jpg')}}" alt="Lights" class="picsize">
        <div class="caption">
        <p class="size-text fontblack font-semibold centered">
            <b class="biggerfont">Name:</b> Oliwia <br>
            <b class="biggerfont">Gender:</b> Female <br>
            <b class="biggerfont">Weight:</b> 57 kg <br>
            <b class="biggerfont">Date of surgery:</b> 15.03.2020 <br>
            <b class="biggerfont">Surgery:</b> Rhinoplasty <br>
            <b class="biggerfont">Opinion:</b> The plastic surgery clinic's Rhinoplasty surgery exceeded my expectations, delivering remarkable results and enhancing my overall facial harmony and confidence.
          </p>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail centered">
        <img src="{{asset('photos/4.jpg')}}" alt="Lights" class="picsize">
        <div class="caption">
        <p class="size-text fontblack font-semibold centered">
            <b class="biggerfont">Name:</b> Monika <br>
            <b class="biggerfont">Gender:</b> Female <br>
            <b class="biggerfont">Weight:</b> 63 kg <br>
            <b class="biggerfont">Date of surgery:</b> 12.12.2019 <br>
            <b class="biggerfont">Surgery:</b> Skin transplant <br>
            <b class="biggerfont">Opinion:</b> This clinic's skin transplant after the fire incident in my house has been a life-changing procedure, restoring my appearance and giving me a new lease on life.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail centered">
        <img src="{{asset('photos/5.jpg')}}" alt="Lights" class="picsize">
        <div class="caption">
        <p class="size-text fontblack font-semibold centered">
            <b class="biggerfont">Name:</b> Mike <br>
            <b class="biggerfont">Gender:</b> Male <br>
            <b class="biggerfont">Weight:</b> 67 kg <br>
            <b class="biggerfont">Date of surgery:</b> 27.08.2022 <br>
            <b class="biggerfont">Surgery:</b> Hair Transplant <br>
            <b class="biggerfont">Opinion:</b> The plastic surgery clinic's hair transplant surgery has significantly enhanced my confidence by restoring a natural and fuller head of hair.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail centered">
        <img src="{{asset('photos/6.jpg')}}" alt="Lights" class="picsize">
        <div class="caption">
        <p class="size-text fontblack font-semibold centered">
            <b class="biggerfont">Name:</b> Barbara <br>
            <b class="biggerfont">Gender:</b> Female <br>
            <b class="biggerfont">Weight:</b> 63 kg <br>
            <b class="biggerfont">Date of surgery:</b> 02.06.2022 <br>
            <b class="biggerfont">Surgery:</b> Laser resurfacing <br>
            <b class="biggerfont">Opinion:</b> The plastic surgery clinic's laser resurfacing surgery has remarkably rejuvenated my skin, leaving it smoother and more youthful.
          </p>
        </div>
    </div>
  </div>
</div>




</section>

<footer>
    <p>&copy; 2023 Plastic Surgery Clinic Facility. All rights reserved.</p>
</footer>

</div>
</body>
</html>
