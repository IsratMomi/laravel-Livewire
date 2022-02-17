<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comments = [
        [
            'body' => 'lorem epsum hjcvahv hav hav ax x hvhdsv h bd x hb b z  mjsvjh cjdgffwef hjavnaBCv',
            'created_at' => '2 min ago',
            'creator' => 'Israt'
        ]
    ];
    public $newComment;
    public function addComment(){
        array_unshift($this->comments,[
            'body' => $this->newComment,
            'created_at'=> Carbon::now()->diffForHumans(),
            'creator'=> 'Momi'
        ]);
        $this->newComment = "";

    }
    public function render()
    {
        return view('livewire.comment');
    }
}
