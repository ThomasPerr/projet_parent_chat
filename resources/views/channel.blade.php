@extends('users.accueil')

@section('channel')

    @foreach ($channels as $channel)
        <div class="box-category">
            <button type="button" class="btn btn-dark btn-block" onclick="location.href='{{ route('chat'), auth()->id() }}'">{{ $channel->nom_channel }}</button>
        </div>    
    @endforeach

@endsection