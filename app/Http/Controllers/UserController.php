<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        //查询所有数据
        $users = User::all();
        //引入视图
        return view("user.index",compact("users"));
    }

    public function add(Request $request)
    {
        //判断提交方式
        if ($request->isMethod("post")){
            //判断
            $this->validate($request,[
                "name"=>"required",
                "password" => "required|min:6|confirmed",
                "captcha"=>"required|captcha"
            ]);
            //得到数据
            $data = $request->post();
            $data["img"] = $request->file("img")->store("images","image");
            //入库
            //2. 添加
            User::create($data);
            //3. 跳转
            return redirect()->route("user.index")->with("success", "添加成功");
        }

        return view("user.add");
    }

    public function edit(Request $request,$id)
    {
        //查询一条数据
        $row = User::find($id);
//        dd($row);
        //判断
        if ($request->isMethod("post")){
            $this->validate($request,[
                "name"=>"required",
                "password" => "required|min:6",
            ]);
            //得到数据
            $data = $request->post();
            $data["img"] = $request->file("img")->store("images","image");
            if ($row->update($data)){
                //跳转
                return redirect()->route("user.index")->with("success","修改成功");
            }
        }

        return view("user.edit",compact("row"));
    }

    public function del($id)
    {
        $user=User::findOrFail($id);

        if ($user->delete()){
            return redirect()->route("user.index")->with("success","删除成功");
        }
    }
}
