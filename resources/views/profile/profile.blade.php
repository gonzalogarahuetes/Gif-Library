@extends('layouts.app')

@section('content')
<div class="m-5 pt-3">
    <div class="pt-3 d-flex justify-content-between align-items-baseline">
        <h2>Your <strong>{{ $user->items->count() }}</strong> Gifs</h2>
        <a href="/item/create">Add new gif</a>
    </div>
    <div class="row pt-5">
        @foreach($user->items as $item)
        <div class="col-4 pb-4">
            <a href="/item/{{ $item->id }}">
                <img src="/storage/{{ $item->image }}" class="w-100" alt="">
            </a>
        </div>
        @endforeach
    </div>
</div>
<div id="home-main">

</div>
@endsection