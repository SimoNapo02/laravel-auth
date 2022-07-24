@extends('layouts.app')


@section('content')
<div class="container margin-auto">
    <div class="card">
        <div class="card-header text-uppercase ">Modifica Post</div>
        <div class="card-body">
            <form action="{{route('admin.posts.update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titolo del post</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                        value="{{old('title', $post->title)}}">
                </div>

                <label for="content">Inserisci il contenuto del post</label>
                <textarea class="form-control" id="content" name="content"
                    rows="7">{{old('content',$post->content)}}</textarea>

                <div class="form-group form-check pt-4">
                    <input type="checkbox" name="published" class="form-check-input" id="published" {{old('published',
                        $post->published)
                    ? 'checked' : "" }}>
                    <label class="form-check-label" for="published">Pubblico</label>
                </div>
                <button type="submit" class="btn btn-primary">Crea post</button>
            </form>
        </div>
    </div>
</div>
@endsection