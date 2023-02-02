<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerSigninRequest;
use App\Http\Requests\CustomerSignupRequest;
use App\Models\CustomerAuth;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\Crypt;
use Exception;

class CustomerAuthController extends Controller
{
    use ResponseTrait;

    public function SingUpForm()
    {
        return view('authentication.register');
    }

    public function signUpStore(CustomerSignupRequest $request)
    {
        try {
            $customer = new CustomerAuth;
            $customer->first_name=$request->first_name;
            $customer->last_name=$request->last_name;
            $customer->contact=$request->contact;
            $customer->shipping_address=$request->shipping_address;
            $customer->email=$request->email;
            $customer->password=Crypt::encryptString($request->password);
            $customer->check_me_out=$request->check_me_out;
            if($customer->save()){
            return redirect(route('login'));
            }else{
            return redirect()->back()->with('please try again');
            }

        }catch(Exception $e){
            dd($e);
        }
    }

    public function SinInForm(){
        return view('authentication.login');
    }

    public function customerLoginCheck(CustomerSigninRequest $request)
    {
        try {
            $customer = CustomerAuth::where('email', $request->email)->first();
            if ($customer) {
                if ($request->password === Crypt::decryptString($customer->password)) {
                    $this->setSession($customer);
                    return redirect()->route('customer.dashboard')->with($this->resMessageHtml(true, null, 'Successfully login'));
                } else
                    return redirect()->route('login')->with($this->resMessageHtml(false, 'error', 'wrong cradential! Please try Again'));
            } else {
                return redirect()->route('login')->with($this->resMessageHtml(false, 'error', 'wrong cradential!. Or no user found!'));
            }
        } catch (Exception $error) {
            dd($error);
            return redirect()->route('login')->with($this->resMessageHtml(false, 'error', 'wrong cradential!'));
        }
    }

    public function setSession($customer){
        return request()->session()->put(
                [
                    'userId'=>$customer->id,
                    'userName'=>$customer->first_name." ".$customer->last_name,
                    'language'=>$customer->language,
                    'image'=>$customer->image?$customer->image:'no-image.png'
                ]
            );
    }

    public function singOut(){
        request()->session()->flush();
        return redirect('login')->with($this->resMessageHtml(false,'error','successfully Logout'));
    }

}
