@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Description</th>
        <th>Facebook</th>
        <th>User</th>
        <th>Status</th>
        @foreach($list_sub as $sub)
            <tr>
                <td>{{$sub->id}}</td>
                <td>{{$sub->name}}</td>
                <td>
                    <img style="width:40px;" src="{{$sub->avatar}}" alt="">
                </td>
                <td>{{$sub->description}}</td>
                <td>
                    <a style="color:blue;" target="_blank"  href="{{$sub->facebook}} " >
                    <span class="d-inline-block text-truncate" style="max-width: 50px;">
                            {{$sub->facebook}}
                    </span>
                    </a >
                </td>
                <td>
                    @foreach($list_user_sub as $user)
                        @if ($sub->userId==$user->id)
                            {{$user->fullName}}
                        @endif
                    @endforeach
                </td>
                <td class="status-style-{{$sub->status}}">
                    @if ($sub->status==STATUS_SUBJECT_ACTIVE)
                        Active
                        @else
                        Unactive
                        @endif
                </td>
            </tr>
        @endforeach
    </table>

@endsection
