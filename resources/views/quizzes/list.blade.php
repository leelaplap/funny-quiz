@extends('layouts.app')
@section('content')
    <div class="container m-5">
        <div class="row m-5">
            <div class="col-12 m-5">
                <div class="container">
                    <section id="team" class="pb-5">
                        <div class="container">
                            <h5 class="section-title h1">List Quizzes</h5>
                            <div class="row">
                                <!-- Team member -->
                                @foreach($quizzes as $quiz)
                                <div class="col-xs-12 col-sm-4 ">
                                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                        <div class="mainflip">
                                            <div class="frontside">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <img class=" img-fluid" src="{{asset('storage/'.$quiz->image)}}" alt="card image">
                                                        <h4 class="card-title">{{$quiz->name}}</h4>
                                                        <p class="card-text">{{$quiz->desc}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="backside">
                                                <div class="card">
                                                    <div class="card-body text-center mt-4">
                                                       <a href="{{route('quizzes.detail',$quiz->id)}}"> <h4 class="card-title">{{$quiz->name}}</h4></a>
                                                        <p class="card-text">{{$quiz->desc}}</p>
{{--                                                        @can('crud-users')--}}
{{--                                                        <a href="{{route('quizzes.delete',$quiz->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete???')"><i class="fa fa-trash-alt"></i>Delete</a>--}}
{{--                                                        <a href="{{route('quizzes.edit',$quiz->id)}}" class="btn btn-warning" >Edit</a>--}}
{{--                                                            @endcan--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection
