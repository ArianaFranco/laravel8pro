<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HTTPClientController extends Controller
{
    
    /**
     * @return mixed
     */
    public function getAllPosts(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        
        return $response->json();
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function getPostById($id){
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        
        return $post->json();
    }
    
    /**
     * @return mixed
     */
    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post title',
            'body' => 'New Post Description'
        ]);
    
        return $post->json();
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function updatePost($id){
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/'. $id, [
            'title' => 'New Post title',
            'body' => 'New Post Description'
        ]);
        
        return $post->json();
    }
    
    /**
     * @param $id
     * @return mixed
     */
    public function deletePost($id){
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/'. $id);
    
        return $post->json();
    }
}
