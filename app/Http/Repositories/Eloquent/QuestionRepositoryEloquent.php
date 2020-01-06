<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\QuestionRepositoryInterface;
use App\Question;

class QuestionRepositoryEloquent implements QuestionRepositoryInterface
{
    protected $question;
    public function __construct(Question $question)
    {
        $this->question=$question;
    }

    function getAll()
    {
        return $this->question->all();
    }

    function findById($id)
    {
        return $this->question->findOrFail($id);
    }

    function store($obj)
    {
      $obj->save();
    }

    function delete($obj)
    {
        return $obj->delete();
    }

    function update($obj)
    {
        $obj->save();
    }

    function saveQ($question)
    {
        $question->save();
    }
}
