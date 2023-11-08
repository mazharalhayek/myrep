@extends('layouts.master')

@section('title')
    Update the News Feed
@endsection

@section('css')

@endsection

@section('Page Name')
    Update
@endsection

@section('title_page')
    أخبار إعلامية
@endsection

@section('title_page2')
    تعديل
@endsection

@section('sidebar link name')
    News Feed
@endsection

@section('sidebar')

@endsection

@section('Content')
    <form method="POST" action="{{route()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <textarea name="title"  class ="form-control" id="title" cols="20" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label for="filename">File name</label>
            <input type="file" name="filename" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="place">Place</label>
            <input type="text" name="place" class="form-control" placeholder="Enter Place">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" name="newsDate" class="form-control" placeholder="Enter Date">
        </div>
        <div class="form-group">
            <label for="order">Order</label>
            <input type="number" name="order" class="form-control" placeholder="Enter Order">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('scripts')

@endsection
