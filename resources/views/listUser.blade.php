@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Full Name</th>
        <th>Avatar</th>
        <th>Birth Day</th>
        <th>Job</th>
        <th>Phone Number</th>
        <th>Facebook</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Role</th>
        <th>Status</th>
        @foreach($list_user as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->fullName}}</td>
            <td>
                <img style="width:40px;" src="{{$user->avatar}}" alt="">
            </td>
            <td>{{date('d/m/y',$user->birthday)}}</td>
            <td style="max-width: 100px;">{{$user->job}}</td>
            <td>{{$user->phoneNumber}}</td>
            <td>
                <a style="color:blue;" target="_blank"  href="{{$user->facebook}} " >
                    <span class="d-inline-block text-truncate" style="max-width: 50px;">
                            {{$user->facebook}}
                    </span>
                </a >
            </td>
            <td>
                @if($user->gender==1)
                    Male
                @else
                    Female
                @endif
            </td>
            <td style="max-width: 100px;">{{$user->country}}</td>
            <td>
                @if($user->role==1)
                    Admin
                @else
                    Course
                @endif
            </td>
            <td class="status-style-{{$user->status}}">
                @if($user->status==1)
                    Active
                @endif
                @if($user->status==2)
                    Unactive
                    @endif
                @if($user->status==3)
                    Lock
                    @endif
                @if($user->status==4)
                    New
                    @endif
            </td>
        </tr>
        @endforeach
    </table>

@endsection
