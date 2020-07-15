@extends('layouts.app')

          @section('content')

          <form action="{{route('send')}} " method="post">
            @csrf
             <label for="to">To</label>
              <select class="form-control" name="to" id="to"> 
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}, {{$user->email}}</option>
               
                @endforeach
                </select>  
           
               <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject"  placeholder="Enter subject" value="{{$subject}}">
            </div>
         
            <div class="form-group">
              <label for="body">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3"  placeholder="Enter message"></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          @endsection
