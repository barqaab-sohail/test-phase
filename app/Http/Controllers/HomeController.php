<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageStore;
use App\Http\Requests\VideoStore;
use App\Http\Requests\EmailStore;
use App\Models\Image;
use App\Models\Video;
use App\Models\Email;
use DB;

class HomeController extends Controller
{
    public function storeImage(ImageStore $request){

    	DB::transaction(function () use ($request) {  
            
                $extension = request()->image->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $folderName = "images/";
                //store file
                $request->file('image')->storeAs('public/'.$folderName,$fileName);
                
                $file_path = storage_path('app/public/'.$folderName.$fileName);

                $attachment['name']=$folderName.$fileName;
                $attachment['size']=$request->file('image')->getSize();
                $attachment['type']=$extension;

            Image::create($attachment);
           }); // end transcation
    	return response()->json(['status'=> 'OK', 'message' => "Data Successfully Saved"]);

    }

    public function storeVideo(VideoStore $request){
    		
    		DB::transaction(function () use ($request) {  
            
                $extension = request()->video->getClientOriginalExtension();
                $fileName = time().'.'.$extension;
                $folderName = "videos/";
                //store file
                $request->file('video')->storeAs('public/'.$folderName,$fileName);
                
                $file_path = storage_path('app/public/'.$folderName.$fileName);

                $attachment['name']=$folderName.$fileName;
                $attachment['size']=$request->file('video')->getSize();
                $attachment['type']=$extension;

            Video::create($attachment);
           }); // end transcation
    	return response()->json(['status'=> 'OK', 'message' => "Data Successfully Saved"]);

    }

    public function storeEmail(EmailStore $request){
    	
    	DB::transaction(function () use ($request) {  
            $input = $request->all();
            Email::create($input);

            \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
		        ), function($message) use ($request){
		            $message->from($request->email);
		            $message->to('sohail.afzal@barqaab.com', 'Admin')->subject('Send from Contact Us Form');
		        });
        }); // end transcation
    	
    	return response()->json(['status'=> 'OK', 'message' => "We have received your message and would like to thank you for writing to us"]);

    }
}
