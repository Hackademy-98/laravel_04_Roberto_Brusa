<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FumettiController extends Controller
{
    public function index(){
        $fumetti=[
            ["titolo"=>"All Star Superman","autore"=>"Grant Morrison","disegnatore"=>"Frank Quietly","casaProduttrice"=>"DC", "img1"=>"https://upload.wikimedia.org/wikipedia/it/9/9e/All_star_superman_ed_italiana.jpg","img2"=>"https://www.fumettologica.it/wp-content/uploads/2016/02/supermanmorrison.jpg","img3"=>"https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/02/All-Star-Superman-Feature-Image.jpg",],
            ["titolo"=>"Batman: The Killing Joke","autore"=>"Alaln Moore","disegnatore"=>"Brian Bolland","casaProduttrice"=>"DC", "img1"=>"https://upload.wikimedia.org/wikipedia/it/thumb/1/17/Batman_The_Killing_Joke.jpg/800px-Batman_The_Killing_Joke.jpg","img2"=>"https://verocinema.com/wp-content/uploads/2018/07/the-killing-joke-123456789.jpg","img3"=>"https://i0.wp.com/www.bigglasgowcomicpage.com/wp-content/uploads/2021/02/kiljok4.jpg?ssl=1",],
            ["titolo"=>"The Sandman: Overture Deluxe Edition","autore"=>"Neil Gaiman","disegnatore"=>"J.H. Williams III","casaProduttrice"=>"DC", "img1"=>"https://m.media-amazon.com/images/I/91TmyWJ45sL._AC_UF1000,1000_QL80_.jpg","img2"=>"https://www.salteditions.it/wp-content/uploads/2016/03/Sandman.jpg","img3"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTioR3B5evUTAwtYtSgNCQRGnE3i-y9T7vOWQ&usqp=CAU",],
            ["titolo"=>"Silver Surfer: Black","autore"=>"Donny Cates","disegnatore"=>"Tradd Moore","casaProduttrice"=>"Marvel", "img1"=>"https://m.media-amazon.com/images/I/71B+UBg4QzL._SL1200_.jpg","img2"=>"https://images.squarespace-cdn.com/content/v1/58c35f74d1758e424ee76710/1565833925379-XG7E0W374HN8ATOHTOI4/Screenshot_20190812-214151_Drive.jpg","img3"=>"https://cdnb.artstation.com/p/assets/images/images/037/255/157/large/hugo-aquino-asset.jpg",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
        ];

        return view('fumetti',['fumetti'=>$fumetti]);
    } 

    public function show($nome){
        $fumetti=[
            ["titolo"=>"All Star Superman","autore"=>"Grant Morrison","disegnatore"=>"Frank Quietly","casaProduttrice"=>"DC", "img1"=>"https://upload.wikimedia.org/wikipedia/it/9/9e/All_star_superman_ed_italiana.jpg","img2"=>"https://www.fumettologica.it/wp-content/uploads/2016/02/supermanmorrison.jpg","img3"=>"https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/02/All-Star-Superman-Feature-Image.jpg",],
            ["titolo"=>"Batman: The Killing Joke","autore"=>"Alaln Moore","disegnatore"=>"Brian Bolland","casaProduttrice"=>"DC", "img1"=>"https://upload.wikimedia.org/wikipedia/it/thumb/1/17/Batman_The_Killing_Joke.jpg/800px-Batman_The_Killing_Joke.jpg","img2"=>"https://verocinema.com/wp-content/uploads/2018/07/the-killing-joke-123456789.jpg","img3"=>"https://i0.wp.com/www.bigglasgowcomicpage.com/wp-content/uploads/2021/02/kiljok4.jpg?ssl=1",],
            ["titolo"=>"The Sandman: Overture Deluxe Edition","autore"=>"Neil Gaiman","disegnatore"=>"J.H. Williams III","casaProduttrice"=>"DC", "img1"=>"https://m.media-amazon.com/images/I/91TmyWJ45sL._AC_UF1000,1000_QL80_.jpg","img2"=>"https://www.salteditions.it/wp-content/uploads/2016/03/Sandman.jpg","img3"=>"https://cdn-star2-com.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2015/10/str2_wow1310sandman_LEAD_cn.jpg",],
            ["titolo"=>"Silver Surfer: Black","autore"=>"Donny Cates","disegnatore"=>"Tradd Moore","casaProduttrice"=>"Marvel", "img1"=>"https://m.media-amazon.com/images/I/71B+UBg4QzL._SL1200_.jpg","img2"=>"https://images.squarespace-cdn.com/content/v1/58c35f74d1758e424ee76710/1565833925379-XG7E0W374HN8ATOHTOI4/Screenshot_20190812-214151_Drive.jpg","img3"=>"https://cdnb.artstation.com/p/assets/images/images/037/255/157/large/hugo-aquino-asset.jpg",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
            ["titolo"=>"","autore"=>"","disegnatore"=>"","casaProduttrice"=>"", "img1"=>"","img2"=>"","img3"=>"",],
        ];

        foreach($fumetti as $el){
            if ($nome == $el['titolo']) {
                return view('fumetto',['data'=>$el]);
            }
        }
    } 
}
