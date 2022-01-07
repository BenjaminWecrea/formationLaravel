<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
 public function index()
 {

    $posts = [
        'mon premier titre',
        'mon deuxieme titre'
    ];
     

     return view('articles', [
         'posts' =>$posts
     ]);
 }
 public function show($id)
 {
$posts = [
    1 => 'titre 1',
    2 => 'titre 2'
];

$post = $posts[$id] ?? 'pas de titre';

return view('article', [

    'post' => $post
]);

 }
 public function contact()
 {
     return view('contact');
 }
}
