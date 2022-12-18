<?php

namespace App\Http\Livewire\Client;

use App\Models\Comment;
use Livewire\Component;

class SaveComment extends Component
{
    public $success ;
    public $error ;
    public $oid ;
    public $class ;
    public $comment ;

    protected $rules = [
        'comment.parent_id' => ['nullable' , 'numeric' , 'exists:comments,id' ],
        'comment.name' => ['required', 'string'],
        'comment.email' => ['required', 'email'],
        'comment.comment' => ['required' , 'string'],
    ];

    public function updated($peroperty , $value )
    {
        $this->success = null;
        $this->error = null;
        $this->validateOnly($peroperty);
    }

    public function send()
    {
        $this->validate();
        $this->comment->commentable_id =  $this->oid;
        $this->comment->commentable_type =  $this->class;
        $this->comment->is_approved =  false;
        try {
            $this->comment->saveOrFail();
            $this->comment->id = null;
            $this->comment->name = null;
            $this->comment->email = null;
            $this->comment->comment = null;
            $this->comment->parent_id = null;
            $this->error = null;
            $this->success = trans('comment_sent');
        } catch (\Exception $exception){
            $this->error = $exception->getMessage();
        }
    }

    protected $listeners = [
        'setParent'
    ];

    public function setParent($value)
    {
        $this->comment->parent_id = $value;
    }

    public function mount($commentAble , comment $comment)
    {
        $this->comment = $comment;
        $this->oid = $commentAble->id;
        $this->class = $commentAble::class;
    }


    public function render()
    {
        return view('livewire.client.comment');
    }
}
