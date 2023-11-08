@extends('layouts.master')

@section('title')
    create Breaking News
@endsection

@section('css')

@endsection

@section('Page Name')
    Create
@endsection

@section('title_page')
    أخبار عاجلة
@endsection

@section('title_page2')
    إنشاء
@endsection

@section('sidebar link name')
    Breaking News
@endsection

@section('sidebar')

@endsection

@section('Content')
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="filename">File Name</label>
            <input type="file" name="filename" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="descrption">Descrption</label>
            <textarea name="descrption"  class ="form-control" id="title" cols="20" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('scripts')

@endsection
