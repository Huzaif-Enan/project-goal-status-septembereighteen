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
                <th>Goals Start Date</th>
                <th>Goals Deadline</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Reason</th>
                <th>Suggestion</th>
                @if($user_role_id == 1)
                <th>Rating</th>
                <th>Comment</th>
                @endif
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            @foreach($view_project_status as $key => $row)
            @if($row->event_status == 1)
            <tr style="background-color: rgb(43, 132, 73)">
                @else
            <tr>
                @endif
                <td>{{$key+1}}</td>
                <td>{{$row->project_start}}</td>
                <td>{{$row->event_date}}</td>
                @php
                $startDate = \Carbon\Carbon::parse($row->project_start);
                $endDate = \Carbon\Carbon::parse($row->event_date);
                $daysDifference = $startDate->diffInDays($endDate);
                @endphp
                <td> {{ $daysDifference }} Days </td>
                <td>{{ $row->event_details }}</td>
                <td>{{$row->pm_reason}}</td>
                <td>{{$row->admin_suggest}}</td>
                @if($user_role_id == 1)
                <td>{{ $row->admin_rating}}</td>
                <td>{{ $row->admin_review}}</td>
                @endif
                @if($row->event_status == 0 && $user_role_id == 1 && $row->pm_response == 1 && $row->admin_resolve== 0)
                <td><a href="{{ route('status-review-form', ['id' => $row->id]) }}">Resolve</a></td>
                @elseif ($row->admin_resolve == 1 && $user_role_id == 1 )
                <td><b>Resolved</b></td>
                @elseif ($row->event_status == 0 && $user_role_id == 4 && $row->pm_response == 0)
                <td><a href="{{ route('status-request-form', ['id' => $row->id]) }}">Deadline Explanation</a></td>
                @else
                <td></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection