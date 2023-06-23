<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Illuminate\Support\Facades\Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class AdminController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the admin center
	 *
	 * @return Response
	 */
	public function getDashboard()
    {
       $user = $this->helpers->getAuthenticatedAdmin();
       if($user === null){
		return redirect()->intended('/');
	   }

		$signals = $this->helpers->signals;
         $stats = $this->helpers->getDashboardStats();
		 $courses = [];
		$categories = $this->helpers->getCategories();
       return view('admin-center',compact(['user','signals','stats','categories']));
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postAddCategory(Request $request)
    {
		$user = $this->helpers->getAuthenticatedAdmin();

       if($user === null){
		return json_encode(['status' => 'error','message' => 'Unauthorized']);
	   }
		
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'category' => 'required',
							 'status' => 'required'
         ]);
         
         if($validator->fails())
         {
			return json_encode(['status' => 'error','message' => 'Validation']);
         }
         
         else
         {
			$req['special'] = '';
			$req['gpc'] = '';
         	$this->helpers->addCategory($req);
	        
			return json_encode(['status' => 'ok']);
         }        
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getUpdateCategoryStatus(Request $request)
    {
	   $user = $this->helpers->getAuthenticatedAdmin();

       if($user === null){
		return json_encode(['status' => 'error','message' => 'Unauthorized']);
	   }
		
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
		    'xf' => 'required',
			'mode' => 'required'
         ]);
         
         if($validator->fails())
         {
			return json_encode(['status' => 'error','message' => 'Validation']);
         }
         
         else
         {
			$req['status'] = $req['mode'] === 'Enable' ? 'enabled' : 'disabled';
         	$this->helpers->updateCategory($req);
	        
			return json_encode(['status' => 'ok']);
         }        
    }
	   
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPractice()
    {
		$url = "http://www.kloudtransact.com/cobra-deals";
	    $msg = "<h2 style='color: green;'>A new deal has been uploaded!</h2><p>Name: <b>My deal</b></p><br><p>Uploaded by: <b>A Store owner</b></p><br><p>Visit $url for more details.</><br><br><small>KloudTransact Admin</small>";
		$dt = [
		   'sn' => "Tee",
		   'em' => "kudayisitobi@gmail.com",
		   'sa' => "KloudTransact",
		   'subject' => "A new deal was just uploaded. (read this)",
		   'message' => $msg,
		];
    	return $this->helpers->bomb($dt);
    }   


}