<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Plastic Surgery Clinic</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
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

        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 20px;
        }

        .dostosuj {
            font-size: 16px;
            color: #666666;
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
        
        .typczcionka{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<a class="back-button" href="http://127.0.0.1:8000"><img src="{{asset('photos/powrot.png')}}" alt="Back to Homepage" class="wymiar"></a>
    <div class="container">
        <h1 class="typczcionka">SOME OF OUR SERVICES</h1>
        <p class="dostosuj typczcionka">DISCLAIMER: SURGERIES LISTED HERE ARE NOT THE ONLY ONES WE PERFORM</p>

        <div class="service">
            <h2 class="service-title typczcionka">Liposuction</h2>
            <p class="service-price typczcionka">Price: $3,000 - $8,000</p>
            <p class="service-description typczcionka">Liposuction is a minimally invasive procedure that removes excess fat deposits to sculpt and contour specific areas of the body. 
                Our skilled surgeons utilize advanced techniques for precise and effective fat removal.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Facelift</h2>
            <p class="service-price typczcionka">Price: $2,000 - $6,000</p>
            <p class="service-description typczcionka">A facelift is a comprehensive surgical procedure that addresses sagging skin, wrinkles, and other signs of aging in the face and neck. 
                Our experienced surgeons tailor the procedure to achieve natural-looking rejuvenation.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Rhinoplasty</h2>
            <p class="service-price typczcionka">Price: $4,000 - $10,000</p>
            <p class="service-description typczcionka">Rhinoplasty, also known as a nose job, is a surgical procedure to enhance the shape and proportion of the nose. 
                Our skilled surgeons work closely with patients to achieve their desired aesthetic goals and improve nasal function.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Eyelid Surgery</h2>
            <p class="service-price typczcionka">Price: $5,000 - $16,000</p>
            <p class="service-description typczcionka">Eyelid surgery, or blepharoplasty, is a procedure to improve the appearance of the upper and/or lower eyelids. 
                Our specialized surgeons can address sagging skin, puffiness, and other concerns to rejuvenate the eyes.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Lip Augmentation</h2>
            <p class="service-price typczcionka">Price: $2,000 - $4,000</p>
            <p class="service-description typczcionka">Lip augmentation is a procedure to enhance the shape and volume of the lips. Our skilled surgeons offer various techniques, 
                including dermal fillers and lip implants, to create natural-looking and beautiful lips.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Body Lift</h2>
            <p class="service-price typczcionka">Price: $8,000 - $23,000</p>
            <p class="service-description typczcionka">A body lift is a comprehensive procedure that removes excess skin and fat from multiple areas of the body, 
                typically after significant weight loss. Our experienced surgeons help patients achieve a more toned and contoured figure.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Brow Lift</h2>
            <p class="service-price typczcionka">Price: $1,500 - $3,000</p>
            <p class="service-description typczcionka">A brow lift, or forehead lift, is a surgical procedure to address sagging brows, forehead wrinkles, and frown lines. 
                Our skilled surgeons can restore a more youthful and refreshed appearance to the upper face.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Liposculpture</h2>
            <p class="service-price typczcionka">Price: $4,000 - $7,000</p>
            <p class="service-description typczcionka">Liposculpture is an advanced technique that combines liposuction with fat transfer to sculpt and reshape specific areas of the body. 
                Our skilled surgeons can enhance contours and provide natural-looking results.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Laser Hair Removal</h2>
            <p class="service-price typczcionka">Price: $500 - $2,000</p>
            <p class="service-description typczcionka">Laser hair removal is a non-invasive procedure that uses laser technology to permanently reduce unwanted hair. 
                Our experienced technicians provide safe and effective treatments for long-lasting hair reduction.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Chemical Peel</h2>
            <p class="service-price typczcionka">Price: $1,000 - $2,000</p>
            <p class="service-description typczcionka">A chemical peel is a cosmetic procedure that improves the appearance of the skin by exfoliating the outer layers. 
                Our trained professionals offer various types of chemical peels to address specific skin concerns.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Dermal Fillers</h2>
            <p class="service-price typczcionka">Price: $1,000 - $2,500</p>
            <p class="service-description typczcionka">Dermal fillers are injectable substances that restore volume and minimize wrinkles and fine lines. 
                Our skilled providers offer a range of dermal fillers to enhance facial features and achieve a more youthful look.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Varicose Vein Treatment</h2>
            <p class="service-price typczcionka">Price: $1,000 - $6,000</p>
            <p class="service-description typczcionka">Varicose vein treatment is a procedure that reduces the appearance of enlarged and twisted veins. 
                Our specialized team offers both surgical and non-surgical options to improve vein health and enhance leg aesthetics.</p>
        </div>

        <div class="service">
            <h2 class="service-title typczcionka">Hair Transplantation</h2>
            <p class="service-price typczcionka">Price: $3,000 - $9,000</p>
            <p class="service-description typczcionka">Hair transplantation is a surgical procedure that restores hair growth in areas of hair loss or thinning. 
                Our skilled surgeons utilize advanced techniques to provide natural-looking and long-lasting hair restoration.</p>
        </div>
        
    </div>
</body>
</html>