<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body, html {
        margin: 0;
        padding: 0;
    }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .contact-info {
            text-align: center;
            margin-top: 50px;
        }

        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .contact-form {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 5px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        .contact-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #222222;
        }

        .contact-social {
            margin-top: 30px;
        }

        .contact-social a {
            display: inline-block;
            margin-right: 10px;
            font-size: 1.2rem;
            color: #333;
            text-decoration: none;
        }

        .media{
            width: 100px;
        }
        .media:hover{
            transition: 700ms ease;
            width: 110px;
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
        .typczcionka{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="image-background">
    <div class="container">
    <div class="contact-info">
        <h2 class="typczcionka">Contact Us</h2>
        <p class="typczcionka">If you have any questions or inquiries, please feel free to reach out to us.</p>
        <p class="typczcionka">Our team is available to assist you:</p>
        <p class="typczcionka">Email: info@clinic.com</p>
        <p class="typczcionka">Phone: +1 45757844443</p>
        <p class="typczcionka">Address: Legnicka 50, Złomowo</p>
    </div>

    <div class="contact-form">
        <h2 class="typczcionka">Send us a message</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="typczcionka">Send Message</button>
        </form>
    </div>

    <div class="contact-social">
        <p class="typczcionka">Connect with us:</p>
        <a href="#" target="_blank"><i class=""><img src="{{asset('photos/facebook.png')}}" alt="Lights" class="media"></i></a>
        <a href="#" target="_blank"><i class=""><img src="{{asset('photos/instagram.jpg')}}" alt="Lights" class="media"></i></a>
        <a href="#" target="_blank"><i class=""><img src="{{asset('photos/twitter.png')}}" alt="Lights" class="media"></i></a>
    </div>
    </div>
    </div>
</body>
</html>