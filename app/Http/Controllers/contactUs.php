<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactUsRequest;
use App\Mail\contactUs as MailContactUs;
use App\Mail\contavtUs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class contactUs extends Controller
{
    public function send(contactUsRequest $request)
    {
        $validator  = $request->validated();

        $firstName = $validator ['firstName'];
        $lastName = $validator ['lastName'];
        $Email = $validator ['Email'];
        $Phone = $validator ['Phone'];
        $Message = $validator ['Message'];
        $fullName = $firstName." ".$lastName;

        $data = [
            'firstName'=>"$firstName",
            'lastName'=>"$lastName",
            'Email'=>"$Email",
            'Phone'=>"$Phone",
            'Message'=>"$Message",
        ];
// info@jitlankatours.com
        // Mail::to('1234321sameera@gmail.com')
        //     ->send(new MailContactUs($data));
        
         $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
          $to = "info@jitlankatours.com";
          $subject = "New Email";


          $msg ='<!DOCTYPE html>
          <html>
              <head>
                  <title>Cad Cleaning PVT</title>
                  <style>
                      .header{
                          font-family: "Noto Sans", sans-serif;
                          margin-top: 20px;
                          font-size: 30px;
                          font-weight: 800;
                          color: #222222;
                         
                      }
                     
                      .para{
                         
                          font-family:sans-serif;
                          margin-top: 2px;
                         font-size: 14px;
                          font-weight: 600;
                         color: #222222;
                      
                      }
                     
                      .attachment{
                                            font-family: "Noto Sans", sans-serif;
                          color:cornflowerblue;
                      }
                     
                      h4{
                          font-family: "Noto Sans", sans-serif;
                          color: darkblue;
                      }
                     
                      .img{
                          background-image: url("{{ asset("images/logo4.png"}}");
                          background-size: cover;
                          width: 50px;
                          height: 30px;                
                          background-color: aqua;
                      }
                  
                 
                 
                  </style>
              </head>
             <body>
                  <div class="d-flex" align="center">
                      <div class="img"></div>
                      <span class="header">JIT Lanka Tours</span>   
                  </div>
                  <br>
                  <div align="justify">
                  <span class="para"></span>
                     
                      <h4>Name  : '.$fullName.' </h4>
                      <h4>Email  : '.$Email.' </h4>
                      <h4>Phone   : '.$Phone.' </h4>
                       <h4>Message   : '.$Message.' </h4>
                     
                     
                  </div>
                 

             
              </body>
          </html>';


          $success = mail($to,$subject,$msg,$headers);

         //code end


         if ($success) {
             return response()->json(['success' => 'mail sent']);          
          } else {
              return response()->json(['error' => 'Email send Fail']);
          }

        // return response()->json([
        //     'success' => 'mail sent',
        // ]);
    }
}
