<?php

namespace App\Http\Livewire;

// namespace App\Http\Livewire\Carbon;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam convallis eget purus ut aliquam. Curabitur feugiat eros nec augue vulputate, eget tempus lorem rhoncus. Proin lobortis at dolor ut semper. Maecenas bibendum tincidunt elit et pellentesque. In fermentum pulvinar scelerisque. Fusce euismod elit felis, euismod feugiat nunc elementum vitae. Donec egestas ullamcorper purus, non consectetur magna dapibus a. Aenean et nisl sit amet enim pellentesque tincidunt vel in dolor. Nullam pretium orci pulvinar mi tempus, non consectetur odio placerat. Etiam cursus tortor velit, sed facilisis neque sollicitudin sit amet. Ut in rutrum velit.',
            'created_at' => '3 min ago',
            'creator' => 'Starhak'
        ]
    ];

    public $newComment;

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
