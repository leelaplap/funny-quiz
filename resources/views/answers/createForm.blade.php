@extends('layouts.app')
@section('content')
    <div class="container m-5">
        <div class="col-12 m-5">
            <div class="row m-5">
                <div class="col-8 m-5">
                    <form method="post" action="{{route('answers.store',$question->id)}}">
                        @csrf
                        <div class="form-group">
                            <label>Name Answer</label>
                            <input type="text" class="form-control" placeholder="Enter Name Answer" name="title">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control"  name="status">
                                <option value="{{\App\StatusInterface::ISRIGHT}}">Đúng</option>
                                <option value="{{\App\StatusInterface::ISWRONG}}">Sai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Question</label>
                            <select class="form-control" name="question_id">
                                <option value="{{$question->id}}">{{$question->title}}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" href="{{route('questions.list',$question->id)}}">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
