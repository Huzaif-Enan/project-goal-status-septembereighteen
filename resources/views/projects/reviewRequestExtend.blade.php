@extends('layouts.app')

@section('filter-section')

@endsection

@section('content')
<div class="container">
    <p><b> Project Name: </b>{{$project_status_notify->project_name}}</p>
    <p><b> Client Name:</b> {{$project_status_notify->client_name}}</p>
    <p><b> Project Manager:</b> {{$project_status_notify->manager_name}}</p>
    <p><b> Project Budget:</b> {{$project_status_notify->project_budget}} Dollar</p>

    <div class="form-group">
        <form action="{{ route('extend-review-event') }}"
              method="POST">
            {{ csrf_field() }}
            <input type="hidden"
                   name="notify_id"
                   value="{{$project_status_notify->id}}">

            <label for="Extended Days"><b>Extended Days</b></label><br>
            <input type="number"
                   name="extended_days" value="{{$project_status_notify->extended_days}}"><br>

            <label for="admin_comment"><b>Comment:</b></label><br>
            <textarea name="admin_comment"
                      id="text"
                      rows="5"
                      cols="40"></textarea><br><br>

            <input type="submit" value="Accept" name="action"  class="btn btn-primary">
           <input type="submit" value="Reject" name="action" class="btn btn-danger">
        </form>
    </div>
</div>

@endsection