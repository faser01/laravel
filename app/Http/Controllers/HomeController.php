<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = null; // объект пользователя
       // $user = (object) [ 'name' => 'Иван'];

        $news = [
            (object) ['title' => 'Новость 1'],
            (object) ['title' => 'Новость 2'],
            (object) ['title' => 'Новость 3'],
            (object) ['title' => 'Новость 4'],
            (object) ['title' => 'Новость 5'],
            (object) ['title' => 'Новость 6'],
            (object) ['title' => 'Новость 7'],
            (object) ['title' => 'Новость 8'],
            (object) ['title' => 'Новость 9'],
            
        ];

        $article = (object) [
            'title' => 'Заголовок статьи',
            'image' => 'images/image.jpg',
            'text' => 'Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. 
            Nullam accumsan venenatis metus sed scelerisque. 
            Vivamus gravida bibendum purus, in consequat nisi accumsan id. 
            Nam eget nibh ut felis feugiat sollicitudin et non odio. 
            Fusce fringilla libero sed sollicitudin pharetra. 
            Ut eu elit eu velit fermentum porta eget viverra dui. 
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec consequat sapien justo, sed interdum massa placerat ac. 
            Pellentesque vitae mi scelerisque, tincidunt lectus ut, porta mauris. 
            Suspendisse sit amet lacinia leo, quis congue urna. 
            Pellentesque in fermentum quam. Nunc a elit nec risus facilisis faucibus eu a lacus. 
            Mauris finibus rhoncus turpis, eu congue urna volutpat a. 
            Praesent dapibus interdum massa, sed condimentum metus vestibulum eu. 
            Mauris sit amet nisi eget turpis pretium sodales. 
            Sed ac tellus eget ante consequat finibus. Integer non pretium quam.
            Etiam at lorem placerat, malesuada diam id, ornare massa. 
            Integer ullamcorper fermentum purus et porttitor. 
            Aliquam ac malesuada dolor, at facilisis massa. 
            Suspendisse dignissim congue tristique. 
            Vestibulum ut turpis vitae massa bibendum interdum ac vitae leo. 
            Donec risus felis, lacinia id hendrerit vitae, aliquam eu nulla. 
            Nam pulvinar, tortor a ultrices rutrum, dolor mauris vestibulum libero, 
            sodales molestie arcu tellus et nisi. Nunc mattis congue sem at viverra. 
            Vivamus mollis mauris non nisl rhoncus accumsan ut vel elit. 
            Etiam congue mollis diam, a suscipit mauris rhoncus id. 
            Integer molestie ante vel ante consequat dapibus. 
            Suspendisse potenti. Proin faucibus tortor ac libero porttitor tempor. 
            Etiam at semper sapien. Suspendisse lacinia rutrum lectus, vitae eleifend augue faucibus ut.',
        ];

        return view('home', compact('user', 'news', 'article'));
    }
}