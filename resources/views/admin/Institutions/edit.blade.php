@extends('layouts.master')

@section('title')
    Update the Institutions
@endsection

@section('css')

@endsection

@section('Page Name')
    Update
@endsection

@section('title_page')
    مؤسسات التعليم العالي
@endsection

@section('title_page2')
    تعديل
@endsection

@section('sidebar link name')
    Institutions
@endsection

@section('sidebar')

@endsection

@section('Content')
    <form method="POST" action="{{route()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" name="category_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('scripts')

@endsection
