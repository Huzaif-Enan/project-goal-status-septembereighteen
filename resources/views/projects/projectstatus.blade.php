@extends('layouts.app')

@section('filter-section')

@endsection

@section('content')

<br><br>
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>SL NO</th>
                <th>Project Name </th>
                <th>Client_Name</th>
                @if($user_role_id == 1)
                <th>Project Manager Name</th>
                @endif
                <th>Project Budget</th>
                <th>Project Category</th>
                <th>Project Start Date</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>

            @foreach($view_project_status as $key => $row)
 
            <tr>       
                <td>{{$key+1}}</td>
                <td><a href="{{ route('project-goal-details', ['id' => $row->project_id]) }}">{{$row->project_name}}</a></td>
                <td>{{$row->client_name}}</td>
                @if($user_role_id == 1)
                <td>{{$row->manager_name}}</td>
                @endif
                <td>{{$row->project_budget}}</td>
                <td>{{$row->project_category}}</td>
                <td>{{$row->project_start}}</td>
                @if($user_role_id == 4 )
                <td><a href="{{ route('extend-request-form', ['id' => $row->project_id]) }}">Extend Request</a></td>
                @elseif($user_role_id == 1 && $row->notify_id != null && $row->project_notify== 0 )
                <td><a href="{{ route('review-request-extend', ['id' => $row->notify_id]) }}">Review Extend Time</a></td>
                @else
                <td></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

@endsection

