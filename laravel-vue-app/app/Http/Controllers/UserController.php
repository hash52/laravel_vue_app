<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request,User::$update_rules);
        $user->fill($request->only(['name','email']))->update();
        session()->flash('updated_done','更新が完了しました');
        return redirect()->back();
    }
}
