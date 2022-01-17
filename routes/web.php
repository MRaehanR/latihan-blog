<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $blogs = [
        'judul' => "Postingan Pertama",
        'isi' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quos libero perspiciatis odio reprehenderit. Veritatis non illum eligendi id iste sunt quos neque minima ducimus, dolores hic error voluptas reprehenderit est veniam iure delectus, facere aperiam blanditiis unde vero eveniet? Quasi voluptatibus enim vero perferendis sunt illo provident, explicabo eum? Perspiciatis quae, aliquid, delectus laudantium, quam impedit cumque praesentium a excepturi placeat totam voluptate ratione nemo repudiandae! Officia deserunt accusantium amet veritatis laudantium reiciendis cumque! Consequuntur blanditiis debitis expedita officiis molestiae provident hic sed itaque, modi obcaecati non eaque ullam?",
        'author' => "Rizki",
    ];

    return view('home', [
        'nav' => 'Home',
        'blog' => $blogs,
    ]);
});

Route::get('/about', function () {

    return view('about', [
        'nav' => 'About',
    ]);
});


Route::resource('posts', PostController::class)->except('show');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::resource('categories', CategoryController::class)->except('show');
Route::get('category/{category:slug}', [CategoryController::class, 'show']);

Route::get('author/{user:name}', function (User $user) {
    return view('blog', [
        'title' => 'Posts by : '.$user->name,
        'posts' => $user->posts()->paginate(5),
    ]);
});












// Route::get('/blog', function () {
//     $blog = [
//         [
//             'judul' => "Postingan Pertama",
//             'isi' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quos libero perspiciatis odio reprehenderit. Veritatis non illum eligendi id iste sunt quos neque minima ducimus, dolores hic error voluptas reprehenderit est veniam iure delectus, facere aperiam blanditiis unde vero eveniet? Quasi voluptatibus enim vero perferendis sunt illo provident, explicabo eum? Perspiciatis quae, aliquid, delectus laudantium, quam impedit cumque praesentium a excepturi placeat totam voluptate ratione nemo repudiandae! Officia deserunt accusantium amet veritatis laudantium reiciendis cumque! Consequuntur blanditiis debitis expedita officiis molestiae provident hic sed itaque, modi obcaecati non eaque ullam?",
//             'author' => "Rizki",
//             'slug' => "postingan-pertama",
//         ],

//         [
//             'judul' => "Postingan Kedua",
//             'isi' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quos libero perspiciatis odio reprehenderit. Veritatis non illum eligendi id iste sunt quos neque minima ducimus, dolores hic error voluptas reprehenderit est veniam iure delectus, facere aperiam blanditiis unde vero eveniet? Quasi voluptatibus enim vero perferendis sunt illo provident, explicabo eum? Perspiciatis quae, aliquid, delectus laudantium, quam impedit cumque praesentium a excepturi placeat totam voluptate ratione nemo repudiandae! Officia deserunt accusantium amet veritatis laudantium reiciendis cumque! Consequuntur blanditiis debitis expedita officiis molestiae provident hic sed itaque, modi obcaecati non eaque ullam?",
//             'author' => "Ahmad",
//             'slug' => "postingan-kedua",
//         ]
//     ];

//     return view('blog', [
//         'title' => 'Blog',
//         'blog' => $blog,
//     ]);
// });


// Route::get('/blog/{slug}', function ($slug) {

//     $blog = Post::where('slug', $slug)->first();

//     return view('post', [
//         'title' => $blog['judul'],
//         'blog' => $blog,
//     ]);
// });
