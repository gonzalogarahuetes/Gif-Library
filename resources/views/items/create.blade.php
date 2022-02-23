@extends('layouts.app')

@section('content')
<div class="container w-50">
    <form action="/item" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <h1>Add a new Gif</h1>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Gif Caption</label>

                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Gif</label>
            <input type="file" class="form-control-file" name="image" id="image">
            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="row pt-4 w-50">
            <button type="submit" class="btn btn-primary">Add new Gif</button>
        </div>
    </form>
</div>

@endsection