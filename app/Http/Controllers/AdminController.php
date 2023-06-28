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
		$products = $this->helpers->getProducts();
		$banners = $this->helpers->getBanners();

		//$users = $this->helpers->getUsers();
       return view('admin-center',compact(['user','signals','stats','categories','products','banners']));
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
    public function postBulkUploadProducts(Request $request)
    {	
		$user = $this->helpers->getAuthenticatedAdmin();

		if($user === null){
		 return json_encode(['status' => 'error','message' => 'Unauthorized']);
		}

       $req = $request->all();
	   
		 #dd($req);
		  $ret = ['status' => "ok","message"=>"nothing happened"];
        $validator = Validator::make($req, [
                             'dt' => 'required',
                             
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
          //return redirect()->withInput()->with("errors",$messages);
		  $ret = ['status' => "error","message"=>"validation"];
         }
         
         else
         {
			$dtt = json_decode($req['dt']);
			#dd($dt);
			
			//foreach($dt as $dtt)
			//{
				#dd($dtt);
				$id = substr($dtt->id,1);
				$p = $dtt->data;
				
				$rr = [
				  'category' => $p->category,
				  'tag' => $p->tag,
                             'description' => $p->desc,                        
                             'name' => $p->name,                        
                             'in_stock' => $p->status,                        
                             'amount' => $p->price,
                             'qty' => $p->stock,
				];
				
				$coverImg = isset($req[$id."-cover"]) ? $req[$id."-cover"] : null;
				$img = isset($req[$id.'-images']) ? $request->file($id.'-images') : null;
                $ird = [];
				
				 if(!is_null($img))
				 {
                    for($i = 0; $i < count($img); $i++)
                    {           
             	      $imgg = $this->helpers->uploadCloudImage($img[$i]->getRealPath());
					  $ci = ($coverImg != null && $coverImg == $i) ? "yes": "no";
					  $temp = ['public_id' => $imgg['public_id'],'ci' => $ci];
			          array_push($ird, $temp);
                    } 
					
				 }
				 
				 $rr['ird'] = $ird;
                 $rr['user_id'] = $user->id;
                # $rr['name'] = "";
			
                 $product = $this->helpers->createProduct($rr);
                 $ret = ['status' => "ok","message"=>"product uploaded"];
					 
			//}
			
			//session()->flash("bulk-upload-products-status", "success");
			//return redirect()->back();
         } 
		 return json_encode($ret);
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postUpdateProduct(Request $request)
    {
	   $user = $this->helpers->getAuthenticatedAdmin();

       if($user === null){
		return json_encode(['status' => 'error','message' => 'Unauthorized']);
	   }
		
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
		    'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
			return json_encode(['status' => 'error','message' => 'Validation']);
         }
         
         else
         {
			if(isset($req['mode'])) $req['status'] = $req['mode'] === 'Enable' ? 'enabled' : 'disabled';
         	$this->helpers->updateProduct($req);
	        
			return json_encode(['status' => 'ok']);
         }        
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getRemoveProduct(Request $request)
    {
	   $user = $this->helpers->getAuthenticatedAdmin();

       if($user === null){
		return json_encode(['status' => 'error','message' => 'Unauthorized']);
	   }
		
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
		    'xf' => 'required',
         ]);
         
         if($validator->fails())
         {
			return json_encode(['status' => 'error','message' => 'Validation']);
         }
         
         else
         {
			$this->helpers->removeProduct($req['xf']);
	        
			return json_encode(['status' => 'ok']);
         }        
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postAddBanner(Request $request)
    {	
		$user = $this->helpers->getAuthenticatedAdmin();

		if($user === null){
		 return json_encode(['status' => 'error','message' => 'Unauthorized']);
		}

       $req = $request->all();
	   
		 #dd($req);
		  $ret = ['status' => "ok","message"=>"nothing happened"];
        $validator = Validator::make($req, [
                             'ird' => 'required',
							 'url' => 'required',
							 'top_text' => 'required',
							 'middle_text' => 'required',
							 'bottom_text' => 'required',
							 'action_text' => 'required',
							 'class' => 'required',
							 'status' => 'required|not_in:none',
                             
         ]);
         
         if($validator->fails())
         {
              $ret = ['status' => "error","message"=>"validation"];
         }
         
         else
         {
		
				$ird = isset($req['ird']) ? $request->file('ird') : null;
				
				 if(!is_null($ird))
				 {
                     $imgg = $this->helpers->uploadCloudImage($ird->getRealPath());
					 $req['img'] = $imgg['public_id'];
					
				 }
			
                 $product = $this->helpers->createBanner($req);
                 $ret = ['status' => "ok","message"=>"banner added"];

         } 
		 return json_encode($ret);
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