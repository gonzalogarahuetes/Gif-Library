@extends('layouts.app')

@section('content')
<div class="item-main">
    <div>
        <h1>{{ $item->caption }}</h1>
    </div>
    <p>Uploaded by: <strong>{{ $item->user->name ?? N/A }}</strong></p>
    <img src="/storage/{{ $item->image }}" alt="{{ $item->caption }}">
</div>
@endsection