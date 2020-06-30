<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        @include('layouts.app')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="pb-4">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($posts as $post)
                        <div class="col-md-6 pb-4">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>{{ $post->title }}</strong></p>
                                    <p>{{ str_limit($post->body, 25) }}</p>
                                    <p>views: {{ $post->views }}</p>
                                    <p>comments: {{ $post->comments }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p>Paragraph-Bio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
