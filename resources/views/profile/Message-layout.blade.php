@extends('profile.Profile-layout')
@section('content')
    <div>
        <div>
            Chat Room
        </div>
        <div>
            <input type="text" class="form-control" placeholder="Name" id="name"/>
        </div>
        <div id="data-message">
            
        </div>
        <div>
            <textarea id="message"></textarea>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </div>
@endsection