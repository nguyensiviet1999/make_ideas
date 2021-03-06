@extends('layouts.frontend_master')
@section('main_content')

<!--------------------------------------
MAIN
--------------------------------------->
@include('auth.navbar')
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="text-center">Make a article</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-group" action="{{url('post-articles')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title">
                    <label for="title">Thumbnail</label>
                    <input id="thumbnail" class="form-control" type="file" name="thumbnail">
                    <label for="title">Category</label>
                    <select class="form-control" name="category" id="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="title">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                    <input class="form-control btn btn-success " type="submit" value="submit">
                </form>
               
            </div>
        </div>
    </div>
    @include('ckfinder::setup')
@include('layouts/footer')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
    CKEDITOR.replace( 'content', {
        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        
    } );
    </script>
@stop