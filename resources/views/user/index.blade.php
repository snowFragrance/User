@extends("layouts.main")
@section("title","首页")

@section("content")
    <a href="{{"user.add"}}" class="btn btn-info">添加</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>邮箱</th>
            <th>头像</th>
            <th>操作</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><img src="{{$user->img}}" height="50px"></td>
                <td>
                    <a href="{{route("user.edit",$user->id)}}">修改</a>
                    <a href="{{route("user.del",$user->id)}}">删除</a>
                </td>
            </tr>
            @endforeach
    </table>

    @endsection
