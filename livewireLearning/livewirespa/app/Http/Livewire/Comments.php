<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{   

    /* public function comments()
    {
        $comments = Comment::all();

        return view('posts.index')->with(compact('comments'));
    } */

    public $comments; /* = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam convallis eget purus ut aliquam.',
            'created_at' => '3 min ago',
            'creator' => 'Starhak'
        ]
    ]; */

    public $newComment;


    public function mount($InitialComments)
    {
        //$this->newComment = 'I am from mounted function';
        $this->comments = $InitialComments;

    }
    
    public function addComment() 
    {
        if( $this->newComment == '' ) {
            return;
        }

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Bibi'
        ]);
        
        $this->newComment = "";
    } 
   
    public function render()
    {
        return view('livewire.comments');
    }
}
