<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Http\Requests;
use App\User as user;
use App\Cities as cities;
use App\media_sub_category as mediaSubCat;
use App\media_subtype as mediaSubType;

use App\products_categories as productCat;

use Illuminate\Support\Facades\Facade;
use Session;
use Response;
use View;

use DB;
use Validator;

use App\Country as country;


class VendorController extends Controller 
{
        public function __construct(Response $response)
	{            
            $user = Auth::user();                          
            
            if(!($user))
            {
                echo " Ganesh Ganesh Ganesh "; 
                return view('vendor.404');                 
                exit;
            }
	}  
        
        public function vendor_zone()
	{
		return view("vendor.vendor_zone");
	}
	
        public function user_register() 
	{        
                
                $loggedInList           = 	Auth::user()->email;
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
                        $user->current_address  =   addslashes($request->Address);
                        $user->current_off_status   =   $request->current_office_status;            

                        $user->is_active=1;
                        $user->save();         
            $success = 1;                        
            return $success;
        }
        public function user_login(Request $request)
        {            
                echo "aaaaaa";
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
                //return Response::json($results);
            $lists = json_encode($results);
            return $lists;
        }
        public function create_media_p()
        {      
            
            //mediaSubType
            $main_cats = \App\media_subtype::all();
            return view('vendor.create_media_p',['maincategory'=>$main_cats]);           
        }
        public function product_select_type(Request $request)
        {            
           //print_r($request->json()->all());
           $media_sub_id = $request->json()->all();
           $mediaId = $media_sub_id['id']['id'];
           
           $results = productCat::
                  where("media_sub_cat_id","=",$mediaId)
                ->get();        
           
            //print_r($results); return false;
            $lists = json_encode($results);
            return $lists;
        }
}
