<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Chirurgii Plastycznej</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const images = document.querySelectorAll('.wymiar');
            
            images.forEach((image) => {
                image.addEventListener('mouseover', () => {
                    const audio = new Audio('click.mp3'); // ścieżka do pliku dźwiękowego klikania
                    audio.play();
                });
            });
        });
    </script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const loginOption = document.querySelector('.login-option a');
        
        // Sprawdzanie statusu logowania użytkownika
        const isUserLoggedIn = false; // Zmienna określająca, czy użytkownik jest zalogowany (wartość logiczna true/false)
        
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
        /* Resetowanie stylów */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

header {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}

h1 {
    font-size: 24px;
    font-weight: 600;
    color: #333333;
    margin-bottom: 10px;
}

h1:hover {
    font-size: 24.2px;
    font-weight: 600;
    color: #333333;
    margin-bottom: 10px;
    letter-spacing: 0.5px;
    transition: 700ms ease;
}

p {
    font-size: 16px;
    color: #666666;
    margin-bottom: 20px;
}

p:hover {
    color: #666666;
    margin-bottom: 20px;
    transition: 700ms ease;
}

.odstep:hover{
    letter-spacing: 0.5px;
    font-size: 14px;
}

.wielkosc{
    font-size: 12px;
}

/* Menu nawigacyjne */
nav {
    background-color: #333333;
    padding: 20px 20px;
}

nav ul {
    list-style: none;
    text-align: center;
    display: flex;
    justify-content: space-between;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
    margin-left: 20px;
}

nav ul li a {
    color: #ffffff;
    font-size: 20px;
    font-weight: 400;
    font-family: 'Gambetta', serif;
    transition: 200MS;
}

nav ul li a:hover {
    font-size:calc(20.3px);
    text-transform: uppercase;
    font-family:  Arial, Helvetica, sans-serif;
    letter-spacing: 0.8px;
    transition: 700ms ease;
    font-variation-settings: "wght" 311;
    margin-bottom: 0.8rem;
    color: PaleGoldenRod;
    outline: none;
    text-decoration: none;
    text-align: center;
}

/* Sekcje strony */
section {
    padding: 40px 20px;
}

section h2 {
    font-size: 20px;
    font-weight: 600;
    color: #333333;
    margin-bottom: 20px;
}

section p {
    font-size: 16px;
    color: #666666;
    margin-bottom: 20px;
}


/* Zdjęcia */
.wymiar {
    width: 20rem;
    object-fit: cover;
    border-radius: 25px;
    margin: 10px;
    transition: 700ms ease;
}

.wymiar-text {
    font-size: 1rem;
    transition: font-size 700ms ease;
    overflow-wrap: break-word; /* lub word-wrap: break-word; */
    max-width: 600px;
    padding-left: 30px; /* Adjust the value as per your preference */
    text-align: justify;
}

.thumbnail:hover .wymiar-text {
    outline: none;
    text-decoration: none;
}

/*czcionka*/
.czcionka{
    color:black;
    font-weight: 700;
}

.czcionka-biala{
    color:white;
}

/* Stopka */
footer {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}

footer p {
    font-size: 14px;
    color: #666666;
}

.text-justify {
    text-align: justify;
    margin-right: 5rem; /* Możesz dostosować wartość odstępu według preferencji */
    margin-top: 1.5rem;
}

.flex-container {
    display: flex;
    align-items: flex-start;
}

.text-container {
    margin-left: 20px; /* Możesz dostosować margines według preferencji */
}

.wymiar-kadra {
    width: 22rem;
    object-fit: cover;
    border-radius: 25px;
    margin: 10px;
    transition: 700ms ease;
}

.wymiar-kadra:hover {
    width: 22.1rem;
    object-fit: cover;
    border-radius: 25px;
    margin: 10px;
    transition: 700ms ease;
}
/* Dodatkowe style dla opcji logowania */
.login-option {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 16px;
}

.login-option:hover {
    transition: 700ms ease;
    font-size: 18px;
}

.login-option a {
    color: #333333;
    text-decoration: none;
}

.typczcionka{
    font-family: Arial, Helvetica, sans-serif;
}

/* Dodatkowe style dla linii granicznej */
.opinia {
    border-bottom: 1px solid #333333;
    padding-bottom: 20px;
}
    body, html {
        height: 100%;
    }

    .my-form{
        border: 3px solid black;
        border-radius: 15px;
    }

    .moveup {
            transform: translateY(-5rem);
        }

    .rozmiar{
        height: 6rem;
    }
    

    </style>
</head>
<body>
    <header class="rozmiar">

        <h1 class="typczcionka">PLASTIC SURGERY CLINIC FACILITY</h1>
        <p class="odstep wielkosc typczcionka">YOU CAN CHANGE YOURSELF WITH US</p>
        
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
                                <button class="typczcionka inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium rounded-md text-gray-800 dark:text-gray-800 bg-gray-100 dark:bg-gray-100 hover:text-gray-700 dark:hover:text-gray-900 focus:outline-none transition ease-in-out duration-150">
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
            <li><a href="/doctors" class="typczcionka">OUR TEAM</a></li>
            <li><a href="/services" class="typczcionka" >SERVICES</a></li>
            <li><a href="/booking"class="typczcionka">BOOKING</a></li>
        </ul>
    </nav>

    <section>
    <h2 class="typczcionka opinia">ABOUT US</h2>
    <div class="flex-container">
      <img src="{{asset('photos/kadra.jpg')}}" alt="Lights" class="wymiar-kadra typczcionka">
      <div class="text-container">
    <p class="text-justify typczcionka czcionka">We are a team of experienced plastic surgeons ready to provide you with a comprehensive range of plastic surgery services. 
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

<section>

<h2 class=" typczcionka opinia">OPINIONS</h2>
<div class="row">
  <div class="col-md-4 my-form">
    <div class="thumbnail">
        <img src="{{asset('photos/1.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
          <p class="wymiar-text czcionka typczcionka">
            <b>Name:</b> Mateusz <br>
            <b>Gender:</b> Male <br>
            <b> Weight:</b> 65 kg <br>
            <b>Date of surgery:</b> 02.12.2019 <br>
            <b> Surgery:</b> Face Reconstruction <br>
            <b> Opinion:</b> The plastic surgery clinic successfully transformed my face through reconstruction surgery, boosting my confidence and leaving me extremely satisfied with the results.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4 my-form">
    <div class="thumbnail">
        <img src="{{asset('photos/2.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka ">
            <b>Name:</b> Kacper <br>
            <b>Gender:</b> Male <br>
            <b>Weight:</b> 73 kg <br>
            <b>Date of surgery:</b> 21.09.2021 <br>
            <b>Surgery:</b> Suction <br>
            <b>Opinion:</b> The plastic surgery clinic's suction surgery exceeded my expectations, delivering outstanding results and leaving me highly satisfied with the procedure.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4 my-form">
    <div class="thumbnail">
        <img src="{{asset('photos/3.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            <b>Name:</b> Oliwia <br>
            <b>Gender:</b> Female <br>
            <b>Weight:</b> 57 kg <br>
            <b>Date of surgery:</b> 15.03.2020 <br>
            <b>Surgery:</b> Rhinoplasty <br>
            <b>Opinion:</b> The plastic surgery clinic's Rhinoplasty surgery exceeded my expectations, delivering remarkable results and enhancing my overall facial harmony and confidence.
          </p>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4 my-form">
    <div class="thumbnail">
        <img src="{{asset('photos/4.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            <b>Name:</b> Monika <br>
            <b>Gender:</b> Female <br>
            <b>Weight:</b> 63 kg <br>
            <b>Date of surgery:</b> 12.12.2019 <br>
            <b>Surgery:</b> Skin transplant <br>
            <b>Opinion:</b> This clinic's skin transplant after the fire incident in my house has been a life-changing procedure, restoring my appearance and giving me a new lease on life.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4 my-form">
    <div class="thumbnail">
        <img src="{{asset('photos/5.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            <b>Name:</b> Mike <br>
            <b>Gender:</b> Male <br>
            <b>Weight:</b> 67 kg <br>
            <b>Date of surgery:</b> 27.08.2022 <br>
            <b>Surgery:</b> Hair Transplant <br>
            <b>Opinion:</b> The plastic surgery clinic's hair transplant surgery has significantly enhanced my confidence by restoring a natural and fuller head of hair.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4 my-form">
    <div class="thumbnail">
        <img src="{{asset('photos/6.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            <b>Name:</b> Barbara <br>
            <b>Gender:</b> Female <br>
            <b>Weight:</b> 63 kg <br>
            <b>Date of surgery:</b> 02.06.2022 <br>
            <b>Surgery:</b> Laser resurfacing <br>
            <b>Opinion:</b> The plastic surgery clinic's laser resurfacing surgery has remarkably rejuvenated my skin, leaving it smoother and more youthful.
          </p>
        </div>
    </div>
  </div>
</div>
  


    
</section>

<footer>
    <p>&copy; 2023 Plastic Surgery Clinic Facility. All rights reserved.</p>
</footer>

</body>
</html>