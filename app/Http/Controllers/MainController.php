<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Item;
use App\Models\News;
use App\Models\User;

class MainController extends Controller
{
    public static function index()
    {
        session_start();
        $news = News::all();
        return view('index', ['news' => $news]);
    }

    public static function info()
    {
        session_start();
        $categories = Category::all();
        $item = null;
        return view('info', ['categories' => $categories, 'item' => $item]);
    }

    public static function info1($id)
    {
        session_start();
        $categories = Category::all();
        $item = Item::where("id", $id)->first();
        if($item)
        {
            return view('info', ['categories' => $categories, 'item' => $item]);
        }
        else
        {
            return 'Error!';
        }
    }

    public static function reg()
    {
        return view('reg1');
    }

    public static function auth()
    {
        return view('auth1');
    }

    public function reg_check(Request $request)
    {
        session_start();

        $valid = $request->validate(array(
            'name' => 'required|min:4|max:100',
            'surname' => 'required|min:4|max:100',
            'email' => 'required|min:4|max:100',
            'login' => 'required|min:2|max:100',
            'password' => 'required|confirmed|min:1'
        ));

        $user = new User();
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = md5($request->login.$request->password);
        $user->name = $request->name;
        $user->surname = $request->surname;

        $user->save();

        $_SESSION["user"] = $user;
        $_SESSION["used"] = 1;
        session(['user' => $user]);

        return redirect()->route('landing');
    }

    public function auth_check(Request $request)
    {
        session_start();

        $login = $request->login;
        $password = $request->password;
        $user = User::where("login", $login)->where("password", md5($login.$password))->first();
        $_SESSION["user"] = $user;
        $_SESSION["used"] = 1;
        if($user)
        {
            return redirect()->route('landing');
        }
        else{
            return 'Error!';
        }
    }

    public function logout(Request $request)
    {
        session_start();

        $_SESSION["user"] = null;
        return redirect()->route('landing');
    }

    public static function prof($id)
    {
        session_start();

        $user = User::where("id", $id)->first();
        if($user)
        {
            return view('prof', ['user' => $user]);
        }
        else{
            return 'Error!';
        }
    }

    public static function news()
    {
        session_start();
        $news = News::all();
        return view('news', ['news' => $news]);
    }

    public static function news1($id)
    {
        session_start();

        $new = News::where("id", $id)->first();
        if($new)
        {
            return view('news1', ['new' => $new]);
        }
        else{
            return 'Error!';
        }
    }

    public static function start()
    {
        session_start();
        return view('start');
    } 
}
