<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request){

            $request->validate([

                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required'


            ]);

            if($this->isOnline()){

                $mail_data =[
                   'recipient'=>'projectmail3139@gmail.com',
                   'formEmail'=>$request->email,
                   'formName'=>$request->name,
                   'subject'=>$request->subject,
                   'body'=>$request->message

                ];
                \Mail::send('email-template',$mail_data, function($message) use ($mail_data){
                    $message->to($mail_data['recipient'])
                    ->from($mail_data['formEmail'],$mail_data['formName'])
                    ->subject($mail_data['subject']);
                });
                return redirect()->back()->with('success', 'Email Sent');
            
            }else{ return redirect()->back()->withInput()->with('error','Check your internet connection');}

    }

    public function isOnline($site = "https://youtube.com/"){

        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
