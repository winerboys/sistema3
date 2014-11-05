<?php
 
class UserLogin extends BaseController {
 
    public function user()
    {
       
       
        if (Auth::attempt(Input::only('username','password')))             {
            
               
                return Redirect::to('nelvic');
  
            }
        else
        {
            return Redirect::to('/')->with('login_errors',true);
        }
    }



}

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     