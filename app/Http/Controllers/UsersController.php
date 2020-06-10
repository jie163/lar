<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'except'    =>  ['show','create','store','index','confirmEmail']
        ]);
        $this->middleware('guest',[
            'only'  =>  ['create']
        ]);
    }

    // 用户列表
    public function index()
    {
//        $users = User::all();
        $users = User::paginate(2);
        return view('users.index',compact('users'));
    }

    // 用户注册样式
    public function create()
    {
        return view('users.create');
    }

    // 用户个人中心
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    // 用户注册逻辑
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name'  =>  $request->name,
            'email'  =>  $request->email,
            'password'  =>  bcrypt($request->password),
        ]);
        $this->sendEmailConfirmationTo($user);
        session()->flash('success','验证邮件已发送到你的注册邮箱上，请注意查收。');
        return redirect('/');
//        Auth::login($user);
//        session()->flash('success','欢迎，您将在这里开启一段新的旅程~');
//        return redirect()->route('users.show',[$user]);
    }

    //发送邮件
    protected function sendEmailConfirmationTo($user)
    {
        $view = 'emails.confirm';
        $data = compact('user');
        $from = 'izhenjie@163.com';
        $name = 'Summer';
        $to = $user->email;
        $subject = "感谢注册 Weibo 应用！请确认你的邮箱。";

        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    // 判断是否激活
    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        $user->activated = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        session()->flash('success', '恭喜你，激活成功！');
        return redirect()->route('users.show', [$user]);
    }

    // 编辑资料样式
    public function edit(User $user)
    {
        $this->authorize('update',$user);
        return view('users.edit',compact('user'));
    }

    // 编辑资料逻辑
    public function update(User $user, Request $request)
    {
        $this->authorize('update',$user);
        $this->validate($request, [
            'name' => 'required|max:50',
            'password' => 'nullable|confirmed|min:6'
        ]);

        $data = [];
        $data['name'] = $request->name;
        if ($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        session()->flash('success','个人资料更新成功！');
//        $user->update([
//            'name'  =>  $request->name,
//            'password'  =>  bcrypt($request->password),
//        ]);
        return redirect()->route('users.show',$user->id);
    }

    // 用户删除
    public function destroy(User $user)
    {
        $this->authorize('destroy',$user);
        $user->delete();
        session()->flash('success','成功删除用户！');
        return back();
    }
}
