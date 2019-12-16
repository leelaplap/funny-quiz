@extends('layouts.app')
@section('content')
    <div class="container m-5">
        <div class="col-12 m-5">
            <div class="row m-5">
                <div class="col-8 m-5">
                    <form method="post" action="{{route('tests.store',$category->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name Test</label>
                            <input type="text" class="form-control" placeholder="Enter Name Test" name="name">
                        </div>
                        <div class="form-group">
                            <label>Desc</label>
                            <input type="text" class="form-control" placeholder="Enter Desc" name="desc">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                          <select name="category_id">
{{--                              @foreach($categories as $categories)--}}
                                  <option value="{{$category->id}}">{{$category->name}}</option>
{{--                                  @endforeach--}}
                          </select>
                        </div>
                        <div class="form-group">
                            <label>Test photos</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
