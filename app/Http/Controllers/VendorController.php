<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PagesController;

use App\Http\Requests;
use App\User as user;
use App\Cities as cities;
use App\Country as country;
use App\media_sub_category as mediaSubCat;




use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Session;
use Response;
use View; 

use DB;
use Validator;

class VendorController extends Controller
{

     use AuthenticatesAndRegistersUsers, ThrottlesLogins;
     protected $redirectTo = '/login';
		
	 public function __construct()
	 {
		  if($this->middleware('auth'))
		  {
		  }
		  
		  
//		   $this->middleware($this->guestMiddleware(), ['except' => ['logout', 'getVerification', 'getVerificationError']]);
		   //$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
	 }
	
	protected function redirectTo()
	{
		return '/path';
	}        
               
        public function vendor_zone()
	{
		return view("vendor.vendor_zone");
	}
	public function user_register() 
	{
                                
                $loggedInList 	= 	Auth::user()->email;
                $irstname 		=  	Auth::user()->firstName;
                $user_id 		=  	Auth::user()->id;
                                                                
                $users = user::find($user_id);
				
                $posts = \App\country::all();
                return view('vendor.user_register', ['users_info'=>$users,'posts' => $posts,'email_list'=>$loggedInList,'id'=>$user_id]);
	}
	
	
	
        public function user_register_submit(Request $request)
        {   		
                        $user_id    =  	Auth::user()->id;
                        $user = user::find($user_id);
						
                        $user->media_type       =   $request->Type;                         
                        $user->mobile_number    =   $request->mobileNumber;                 								  						 
						$user->company_name     =   addslashes($request->company_name);                        
						$user->website          =   addslashes($request->Co_Website);						
                        $user->off_emailId      =   addslashes($request->co_email_id);						
                        $user->land_phone       =   $request->Landline_Ph_No;						
                        $user->location         =   $request->Location;      
                        $user->current_off_status   =   $request->current_office_status;            
						$user->current_address  =   addslashes($request->Address);
						
                        $user->is_active=1;
                        $user->save();                        
            $success = 1;                        
            return $success;
        }
        public function user_login(Request $request)
        {
                $users = new user();
                
                $data = $request->all();
                print_r($data);
        }
        public function create_vendor()
        {             
            return view('vendor.create_vendor');
        }
        
        public function create_media()
        {             
            return view('vendor.create_media');
        }
        public function media_select_type(Request $request)
        {
                $data = $request->json()->all();                
                $Media_id = $data['id']; 
                
                $results = mediaSubCat::
                  where("category_id","=",$Media_id)
                ->get();    
         
                $lists = json_encode($results);
                return $lists;
        }
        public function create_media_p()
        {
		   if (Auth::user())
		   {
            return view('vendor.create_media_p');
			}
			
        }
}
