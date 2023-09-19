@extends('layouts.app')

@section('filter-section')

@endsection

@section('content')
<div class="container">
    <p><b> Project Name: </b>{{$view_project_status->project_name}}</p>
    <p><b> Client Name:</b> {{$view_project_status->client_name}}</p>
    <p><b> Project Budget:</b> {{$view_project_status->project_budget}} Dollar</p>
 
    <div class="form-group">
        <form action="{{ route('extend-reason-event') }}"
              method="POST">
            {{ csrf_field() }}
            <input type="hidden"
                   name="project_id"
                   value="{{$view_project_status->id}}">
            
            <label for="Extended Days"><b>Extended Days</b></label><br>
            <input type="number"name="extended_days"><br>

            <label for="manager_reason"><b>Reason:</b></label><br>
            <textarea name="pm_reason"
                      id="text"
                      rows="5"
                      cols="40"
                      required></textarea><br><br>
        
            <button type="submit"
                    class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection