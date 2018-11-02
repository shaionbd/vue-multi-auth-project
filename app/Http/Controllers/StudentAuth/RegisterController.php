<?php

namespace App\Http\Controllers\StudentAuth;

use App\Student;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/student/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|max:255|unique:students',
            'email' => 'required|email|max:255|unique:students',
            'company' => 'required|max:255',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Student
     */
    protected function create(array $data)
    {
        $student = new Student();
        $student->first_name = $data['first_name'];
        $student->last_name = $data['last_name'];
        $student->username = $data['username'];
        $student->email = $data['email'];
        $student->company = $data['company'];
        $student->password = bcrypt($data['password']);
        
        $student->save();

        // send activation email
        $activation_url = 'http://localhost:8000/student/account/activate?id='.$student->id.'&curr_id='.$student->password;
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("hello@simonechinaglia.net");
        $email->setSubject("Account Activation");
        
        $email->addTo($student->email, "");
        $email->addContent(
            "text/html", $this->_emailBody($activation_url)
        );
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
            return response()->json([
                "status" => $response
            ], 200);
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }

        return $student;
    }

    /** 
     * Activate account
     * 
     */
    public function activate(Request $request){
        $id = $request->input('id');
        $password = $request->input('password');

        $student = Student::where('id', $id)->where('password', $password)->first();
        $student->is_activate = 1;
        $student->save();

        return response()->json(['success'=> 'Successfullty Activate']);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('student.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('api');
    }


    public function _emailBody($activation_url){
        $body = '
            <!DOCTYPE html>
            <html lang="en">
               <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <!-- TITLE -->
                    <title></title>
                    <link rel="apple-touch-icon" href="apple-touch-icon.png">  
                    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">          
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
                    <style>
                        body{
                            margin: 0;
                            font-family: "Nunito", sans-serif;
                        }
                        .wrapper{
                            width: 768px;
                            margin: 0 auto;
                            background-color: #f7f7f7;
                            padding: 30px 50px;
                        }

                        .email_content{
                            background: #fff;
                            padding: 0px 30px;
                        }
                        .email_content{}
                        .dl_p{
                            width: 171px;
                            height: 25px;
                            color: #ffffff;
                            font-size: 18px;
                            font-weight: 600;
                            text-align: center;
                            display: inline-block;
                            display: block;
                            width: 232px;
                            height: 39px;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26), 0 2px 10px rgba(0, 0, 0, 0.16);
                            border-radius: 3px;
                            background-color: #f6b253;
                            margin: 0 auto;
                            line-height: 39px;
                            text-decoration: none;
                            margin-bottom: 30px;
                        }
                        .text-center{
                            text-align: center;
                        }
                        .footer{
                            width: 100%;
                            height: 50px;
                            background-color: #fdedd6;
                            text-align: center;
                            line-height: 53px;
                            margin-top: 30px;
                        }
                        .link {
                            display: block;
                            color: #f5a73e;
                            margin: 0px 0px;
                        }
                        .email_content_text > h2{
                            color: #808080;
                            font-size: 18px;
                            font-size: 24px;
                            margin-bottom: 0;
                        }
                        .email_content_text > p{
                            font-size: 18px;
                            font-weight: 500;
                            color: #808080;
                        }
                        table{
                            background: #fff;
                            position: relative;
                            width: 768px;
                            margin: 0px auto;
                        }
                        table tr:first-child{
                            position: relative;
                            padding-top: 20px
                        }
                        table tr:first-child:after{
                            position: absolute;
                            top: 0;
                            left: 0;
                            border-top:7px solid #f6b253;
                            width: 100%;
                            content: "";
                            border-radius: 5px 5px 0px 0px;
                            margin-bottom: 20px;
                        }
                        table tr td{
                            padding-left: 15px;
                            padding-right: 15px;
                        }
                         table tr:first-child td{
                            padding-top: 25px;
                        }
                    </style>
                </head>
                <body>
                    <div class="wrapper clearfix">
                        <table style="border-top: 7px solid #f6b253; border-radius: 5px 5px 0px 0px;margin-bottom: 20px">
                            
                            <tr>
                                <td colspan="2"><p style="margin-bottom: 30px;color: #808080;">You are receiving this email because you have created an account.</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a style="width: 171px;
                                                            height: 25px;
                                                            color: #ffffff;
                                                            font-size: 18px;
                                                            font-weight: 600;
                                                            text-align: center;
                                                            display: inline-block;
                                                            display: block;
                                                            width: 232px;
                                                            height: 39px;
                                                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26), 0 2px 10px rgba(0, 0, 0, 0.16);
                                                            border-radius: 3px;
                                                            background-color: #f6b253;
                                                            margin: 0 auto;
                                                            line-height: 39px;
                                                            text-decoration: none;
                                                            margin-bottom: 30px;" 
                                                            href="'.$activation_url.'">Activation Link</a></td>
                            </tr>
                            
                        </table>
                    </div>           
                </body>
            </html>

        ';

        return $body;
    }

}
