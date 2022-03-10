<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackFormRequest;
use App\Models\FeedbackModel;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function index()
    {
        return view('mainpage');
    }

    public function form(FeedbackFormRequest $request)
    {
        if(empty($request)){
            return redirect() -> route('mainpage')
                ->withErrors(['msg' => 'Пожалуйста, проверьте введенные данные и попробуйте еще раз.']);
        }
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        if($request->forwhat == 1){
            $forwhat = 'Бизнес';
        }else{
            $forwhat = 'Cтартап';
        }
        $sendToDatabase = new FeedbackModel();
        $sendToDatabase->name=$name;
        $sendToDatabase->phone=$phone;
        $sendToDatabase->email=$email;
        $sendToDatabase->forwhat=$forwhat;
        $sendToDatabase->save();
        /*
        return redirect() -> route('mainpage')
            ->with(['success' => '1']);*/
    }

}
