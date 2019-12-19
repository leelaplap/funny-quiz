@extends('layouts.admin')
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold">
                List Question
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Question</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Question</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td><h3>{{$question->title}}</h3></td>
                            <td>
                                <a href="{{route('questions.delete',$question->id)}}"
                                   class="btn btn-danger text-white delete-category" style="color: red"
                                   onclick="return confirm('Are you want delete ?')">Del</a>
                                <a href="{{route('questions.edit',$question->id)}}"
                                   class="btn btn-primary text-white delete-category" style="color: red"
                                >Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
