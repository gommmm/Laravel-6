@extends('layout')

@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input  @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title') ? old('title') : $article->title }}">
                        @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</P>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">{{ old('excerpt') ? old('excerpt') : $article->excerpt }}</textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</P>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{ old('body') ? old('body') : $article->body }}</textarea>
                        @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</P>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection