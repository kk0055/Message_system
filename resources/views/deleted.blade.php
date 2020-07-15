@extends('layouts.app')

@section('content')

        @if (count($messages) > 0)
        <ul class="list-group">
            @foreach($messages as $message)
       
            <li class="list-group-item">
                <strong>From: {{$message->userFrom->name}}, {{$message->userFrom->email }} </strong>
                | タイトル : {{$message->subject}}
                <a href="{{ route('return',$message->id)}} " class="btn btn-info folat-right btn-sm">Return message to inbox</a>
                </li>
                 
                @endforeach
        </ul>
        
        @else
        No messages!
        @endif
        
@endsection
