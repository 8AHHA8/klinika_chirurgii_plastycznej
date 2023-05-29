<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Chirurgii Plastycznej</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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

body {
    font-family: 'Open Sans', sans-serif;
}

/* Dodatkowe style strony */

/* Nagłówek */
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

/* .wymiar:hover {
    width: 22rem;
    border-radius: 25px;
} */

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
    </style>
</head>
<body>
    <header>
        <h1 class="typczcionka">PLASTIC SURGERY CLINIC FACILITY</h1>
        <p class="odstep wielkosc typczcionka">YOU CAN CHANGE YOURSELF WITH US</p>
        <div class="login-option">
        <?php
        // Sprawdzanie statusu logowania użytkownika
        $isUserLoggedIn = false; // Zmienna określająca, czy użytkownik jest zalogowany (wartość logiczna true/false)
        
        if ($isUserLoggedIn) {
            echo '<a href="http://127.0.0.1:8000/logout" class="typczcionka">Log out</a>';
        } else {
            echo '<a href="http://127.0.0.1:8000/login" class="typczcionka">Login</a>';
        }
        ?>
    </div>
    </header>

    <nav>
        <ul>
            <li><a href="http://127.0.0.1:8000/registration" class="typczcionka">PATIENT REGISTRATION</a></li>
            <li><a href="http://127.0.0.1:8000/team" class="typczcionka">OUR TEAM</a></li>
            <li><a href="http://127.0.0.1:8000/services" class="typczcionka" >SERVICES</a></li>
            <li><a href="http://127.0.0.1:8000/booking"class="typczcionka">BOOKING</a></li>
            <li><a href="http://127.0.0.1:8000/contact" class="typczcionka">CONTACT</a></li>
        </ul>
    </nav>

    <section>
    <h2 class="typczcionka opinia">ABOUT US</h2>
    <div class="flex-container">
      <img src="{{asset('photos/kadra.jpg')}}" alt="Lights" class="wymiar-kadra typczcionka">
      <div class="text-container">
    <p class="text-justify typczcionka">We are a team of experienced plastic surgeons ready to provide you with a comprehensive range of plastic surgery services. 
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
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('photos/1.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
          <p class="wymiar-text czcionka typczcionka">
            Name: Mateusz <br>
            Gender: Male <br>
            Weight: 65 kg <br>
            Date of surgery: 02.12.2019 <br>
            Surgery: Face Reconstruction <br>
            Opinion: The plastic surgery clinic successfully transformed my face through reconstruction surgery, boosting my confidence and leaving me extremely satisfied with the results.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('photos/2.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka ">
            Name: Kacper <br>
            Gender: Male <br>
            Weight: 73 kg <br>
            Date of surgery: 21.09.2021 <br>
            Surgery: Suction <br>
            Opinion: The plastic surgery clinic's suction surgery exceeded my expectations, delivering outstanding results and leaving me highly satisfied with the procedure.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('photos/3.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            Name: Oliwia <br>
            Gender: Female <br>
            Weight: 57 kg <br>
            Date of surgery: 15.03.2020 <br>
            Surgery: Rhinoplasty <br>
            Opinion: The plastic surgery clinic's Rhinoplasty surgery exceeded my expectations, delivering remarkable results and enhancing my overall facial harmony and confidence.
          </p>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('photos/4.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            Name: Monika <br>
            Gender: Female <br>
            Weight: 63 kg <br>
            Date of surgery: 12.12.2019 <br>
            Surgery: Skin transplant <br>
            Opinion: This clinic's skin transplant after the fire incident in my house has been a life-changing procedure, restoring my appearance and giving me a new lease on life.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('photos/5.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            Name: Mike <br>
            Gender: Male <br>
            Weight: 67 kg <br>
            Date of surgery: 27.08.2022 <br>
            Surgery: Hair Transplant <br>
            Opinion: The plastic surgery clinic's hair transplant surgery has significantly enhanced my confidence by restoring a natural and fuller head of hair.
          </p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{asset('photos/6.jpg')}}" alt="Lights" class="wymiar">
        <div class="caption">
        <p class="wymiar-text czcionka typczcionka">
            Name: Barbara <br>
            Gender: Female <br>
            Weight: 63 kg <br>
            Date of surgery: 02.06.2022 <br>
            Surgery: Laser resurfacing <br>
            Opinion: The plastic surgery clinic's laser resurfacing surgery has remarkably rejuvenated my skin, leaving it smoother and more youthful.
          </p>
        </div>
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