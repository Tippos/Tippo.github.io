@extends('layout')
@section('content')
    <table class="table table-hover">
        <th>ID</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Subject</th>
        <th>User</th>
        <th>Status</th>
        @foreach($list_class as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td>
                    <img style="width:40px;" src="{{$class->avatar}}" alt="">
                </td>
                <td>
                    @foreach($list_subject_class as $sb)
                        @if ($class->subjectId==$sb->id)
                            {{$sb->name}}
                        @endif
                    @endforeach
                </td>
               <td>
                   @foreach($list_user_class as $user)
                       @if ($class->userId==$user->id)
                           {{$user->fullName}}
                           @endif
                       @endforeach
               </td>
                <td class="status-style-{{$class->status}}">
                    @if($class->status==1)
                        Active
                    @endif
                    @if($class->status==2)
                        Unactive
                    @endif
                    @if($class->status==3)
                        Registering
                    @endif

                </td>
            </tr>
        @endforeach
    </table>

@endsection
