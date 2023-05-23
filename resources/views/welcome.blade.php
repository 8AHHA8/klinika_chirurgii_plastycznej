<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Chirurgii Plastycznej</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
            font-size: 16.2px;
            color: #666666;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
            transition: 700ms ease;
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
            font-size:calc(20.2px);
            text-transform: uppercase;
            font-family: 'Gambetta', serif;
            letter-spacing: 0.5px;
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


        /* zdjęcia */
        .wymiar {
            width: 400px;
            height: 600px;
            object-fit: cover;
            border-radius: 25px;
        }

        .wymiar:hover {  
            transition: 700ms ease;
            width: 550px;  
            height: 550px;  
            border-radius: 25px;
        } 

        .thumbnail::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.75);
            opacity: 0;
            transition: opacity 0.3s;
            border-radius: 25px;
            }

        .thumbnail:hover::after {
            opacity: 1;
        }

        /* .thumbnail:hover::after {
            /* content: attr(data-caption); */
            /* content: attr(data-foo); */
            /* color: #fff; Biały kolor tekstu */
            /* font-size: 16px; Rozmiar czcionki */
            /* Dodatkowe style dla tekstu */
        /* }  */

        .caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .caption p{
            color: red;
            Z-index: 10;
        }

        .thumbnail:hover .caption {
            opacity: 1;
            color: #fff; /* Dodatkowo ustawiamy biały kolor dla tekstu */
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
    </style>
</head>
<body>
    <header>
        <h1>Zakład Przychodni Chirurgii Plastycznej</h1>
        <p>Dzięki nam możesz się zmienić</p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Rejestracja pacjentów</a></li>
            <li><a href="#">Kadra</a></li>
            <li><a href="#">Usługi</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>

    <section>
        <h2>O nas</h2>
        <t>Jesteśmy doświadczonym zespołem chirurgów plastycznych i możemy zapewnić Ci kompleksową gamę usług z zakresu chirurgii plastycznej. 
            Nasza przychodnia jest wyposażona w najnowocześniejszy sprzęt medyczny, 
            a nasi specjaliści posiadają bogate doświadczenie i wysoką wiedzę w swojej dziedzinie.</t>
</section>

<section>


<div class="row">
<div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="{{asset('photos/1.jpg')}}" alt="Nature" style="width:100%" class="wymiar">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="{{asset('photos/2.jpg')}}" alt="Nature" style="width:100%" class="wymiar">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="{{asset('photos/3.jpg')}}" alt="Fjords" style="width:100%" class="wymiar">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="{{asset('photos/4.jpg')}}" alt="Nature" style="width:100%" class="wymiar">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="{{asset('photos/5.jpg')}}" alt="Nature" style="width:100%" class="wymiar">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="{{asset('photos/6.jpg')}}" alt="Nature" style="width:100%" class="wymiar">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  
  
</div>
    
</section>



<footer>
    <p>&copy; 2023 Zakład Przychodni Chirurgii Plastycznej. Wszelkie prawa zastrzeżone.</p>
</footer>

<!-- <script>
function addClassOrDelete(opinia, klasa) {
  const element = document.querySelectorAll(opinia);
  
  element.addEventListener('mouseenter', function() {
    element.classList.add(klasa);
  });
  
  element.addEventListener('mouseleave', function() {
    element.classList.remove(klasa);
  });
}

addClassOrDelete('.myElement', '.highlight');
</script> -->

</body>
</html>