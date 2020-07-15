@extends('layouts.app')

@section('content')

        @if (count($messages) > 0)
        <ul class="list-group">
            @foreach($messages as $message)
            <a href="{{route('read',$message->id)}} ">
            <li class="list-group-item">
                <strong>From: {{$message->userFrom->name}}, {{$message->userFrom->email }} </strong>
                | タイトル : {{$message->subject}}
                <a href="{{ route('delete',$message->id)}}" class="btn btn-danger float-right">Delete</a> 
                </li>
            </a>
       
                @endforeach
              
        </ul>
   

        @else
        No messages!
        @endif
        
@endsection
