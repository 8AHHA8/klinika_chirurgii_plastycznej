<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SurgerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surgeries')->insert([
            [
                'name' => 'Liposuction',
                'price' => 8000,
                'description' => 'Liposuction is a minimally invasive procedure that removes excess fat deposits to sculpt and contour specific areas of the body. 
                Our skilled surgeons utilize advanced techniques for precise and effective fat removal.',
            ],
            [
                'name' => 'Facelift',
                'price' => 6000,
                'description' => 'A facelift is a comprehensive surgical procedure that addresses sagging skin, wrinkles, and other signs of aging in the face and neck. 
                Our experienced surgeons tailor the procedure to achieve natural-looking rejuvenation.',
            ],
            [
                'name' => 'Rhinoplasty',
                'price' => 10000,
                'description' => 'Rhinoplasty, also known as a nose job, is a surgical procedure to enhance the shape and proportion of the nose. 
                Our skilled surgeons work closely with patients to achieve their desired aesthetic goals and improve nasal function.',
            ],
            [
                'name' => 'Eyelid Surgery',
                'price' => 16000,
                'description' => 'Eyelid surgery, or blepharoplasty, is a procedure to improve the appearance of the upper and/or lower eyelids. 
                Our specialized surgeons can address sagging skin, puffiness, and other concerns to rejuvenate the eyes.',
            ],
            [
                'name' => 'Lip Augmentation',
                'price' => 4000,
                'description' => 'Lip augmentation is a procedure to enhance the shape and volume of the lips. 
                Our skilled surgeons offer various techniques, including dermal fillers and lip implants, to create natural-looking and beautiful lips.',
            ],
            [
                'name' => 'Body Lift',
                'price' => 23000,
                'description' => 'A body lift is a comprehensive procedure that removes excess skin and fat from multiple areas of the body, typically after significant weight loss. 
                Our experienced surgeons help patients achieve a more toned and contoured figure.',
            ],
            [
                'name' => 'Brow Lift',
                'price' => 3000,
                'description' => 'A brow lift, or forehead lift, is a surgical procedure to address sagging brows, forehead wrinkles, and frown lines. 
                Our skilled surgeons can restore a more youthful and refreshed appearance to the upper face.',
            ],
            [
                'name' => 'Liposculpture',
                'price' => 7000,
                'description' => 'Liposculpture is an advanced technique that combines liposuction with fat transfer to sculpt and reshape specific areas of the body. 
                Our skilled surgeons can enhance contours and provide natural-looking results.',
            ],
            [
                'name' => 'Laser Hair Removal',
                'price' => 2000,
                'description' => 'Laser hair removal is a non-invasive procedure that uses laser technology to permanently reduce unwanted hair. 
                Our experienced technicians provide safe and effective treatments for long-lasting hair reduction.',
            ],
            [
                'name' => 'Chemical Peel',
                'price' => 2000,
                'description' => 'A chemical peel is a cosmetic procedure that improves the appearance of the skin by exfoliating the outer layers. 
                Our trained professionals offer various types of chemical peels to address specific skin concerns.',
            ],
            [
                'name' => 'Dermal Fillers',
                'price' => 2500,
                'description' => 'Dermal fillers are injectable substances that restore volume and minimize wrinkles and fine lines. 
                Our skilled providers offer a range of dermal fillers to enhance facial features and achieve a more youthful look.',
            ],
            [
                'name' => 'Varicose Vein Treatment',
                'price' => 6000,
                'description' => 'Varicose vein treatment is a procedure that reduces the appearance of enlarged and twisted veins. 
                Our specialized team offers both surgical and non-surgical options to improve vein health and enhance leg aesthetics.',
            ],
            [
                'name' => 'Hair Transplantation',
                'price' => 9000,
                'description' => 'Hair transplantation is a surgical procedure that restores hair growth in areas of hair loss or thinning. 
                Our skilled surgeons utilize advanced techniques to provide natural-looking and long-lasting hair restoration.',
            ],
            [
                'name' => 'Botox Injections',
                'price' => 3000,
                'description' => 'Botox injections are a popular non-surgical treatment that reduces the appearance of wrinkles and fine lines. 
                Our skilled providers use Botox to target specific facial muscles, resulting in a smoother and more youthful look.',
            ],
            [
                'name' => 'Tummy Tuck',
                'price' => 12000,
                'description' => 'A tummy tuck, or abdominoplasty, is a surgical procedure that removes excess skin and fat from the abdominal area. 
                Our experienced surgeons can also tighten the underlying muscles for a flatter and more toned abdomen.',
            ],
            [
                'name' => 'Microdermabrasion',
                'price' => 2500,
                'description' => 'Microdermabrasion is a non-invasive exfoliation treatment that improves the texture and appearance of the skin. 
                Our trained professionals use a specialized device to gently remove the outer layer of dead skin cells, revealing smoother and more radiant skin.',
            ],
            [
                'name' => 'Skin Tightening',
                'price' => 5000,
                'description' => 'Skin tightening treatments use various techniques to stimulate collagen production and improve skin elasticity. 
                Our skilled providers offer non-surgical options such as radiofrequency and ultrasound to firm and tighten the skin on the face and body.',
            ],
            [
                'name' => 'Body Contouring',
                'price' => 8000,
                'description' => 'Body contouring procedures are designed to reshape and sculpt the body by eliminating excess fat and skin. 
                Our experienced surgeons utilize advanced techniques such as liposuction and skin tightening to create a more defined and proportionate physique.',
            ],
            [
                'name' => 'Ear Surgery',
                'price' => 4000,
                'description' => 'Ear surgery, or otoplasty, is a procedure to correct the shape, position, or proportion of the ears. 
                Our skilled surgeons can address concerns such as prominent ears or ear deformities, helping patients achieve a more balanced and harmonious appearance.',
            ],
            [
                'name' => 'Laser Resurfacing',
                'price' => 7000,
                'description' => 'Laser resurfacing is a treatment that uses laser technology to improve the texture and appearance of the skin. 
                Our specialized providers can target specific skin concerns, such as wrinkles, scars, and age spots, for smoother and more youthful-looking skin.',
            ],
            [
                'name' => 'Thigh Lift',
                'price' => 10000,
                'description' => 'A thigh lift is a surgical procedure that removes excess skin and fat from the thighs, resulting in firmer and more contoured legs. 
                Our experienced surgeons can customize the procedure to address specific concerns and achieve the desired thigh appearance.',
            ],
            [
                'name' => 'Arm Lift',
                'price' => 8000,
                'description' => 'An arm lift, or brachioplasty, is a surgical procedure that removes excess skin and fat from the upper arms. 
                Our skilled surgeons can tighten and reshape the arms for a more toned and proportionate appearance.',
            ],
            [
                'name' => 'Face Lift',
                'price' => 12000,
                'description' => 'A face lift, or rhytidectomy, is a comprehensive surgical procedure that addresses signs of aging in the face and neck. 
                Our experienced surgeons can tighten sagging skin, smooth wrinkles, and restore a more youthful and refreshed facial appearance.',
            ],
            [
                'name' => 'Eye Tattoo',
                'price' => 10000,
                'description' => 'Eye tattooing, also known as permanent makeup or cosmetic tattooing, is a procedure to enhance the appearance of the eyes. 
                Our specialized technicians can apply permanent eyeliner, eyebrow shading, or other eye-enhancing techniques to achieve long-lasting results.',
            ],
        ]);
    }
}
