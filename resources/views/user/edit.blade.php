@extends("layouts.main")
@section("title","首页")

@section("content")
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="用户名" name="name" value="{{$row->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" value="{{$row->email}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">头像</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputEmail3" name="img" value="{{$row->img}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="修改密码，不用确认(必填)" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="JavaScript:history.go(-1)" class="btn btn-info">返回</a>
                <button type="submit" class="btn btn-success">修改</button>
            </div>
        </div>
    </form>

    @endsection
