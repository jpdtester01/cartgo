<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

use Validator;

class AddProductController extends Controller
{
    public function show(Request $req){
    	if( $req->session()->has('id') ){
    		$userData = DB::table('users')
					 -> where('userid', $req->session()->get('id'))
					 -> first();
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();

			$WishData = DB::table('tbl_wishlist')->leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')->where('tbl_wishlist.user_id',$req->session()->get('id'))->get();		 		

			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['WishData'=>$WishData,'site'=>'addDetails'])->with(compact('userData','SiteData','TimeData','CartData'));
    	}
    	else{
    		$req->session()->put('msg', 'Login First Please !');
			return redirect('/login');
    	}
    }
	
	public function Add(Request $req){
    	if( $req->session()->has('id') ){
    		
			$userData = DB::table('users')
					 -> where('userid', $req->session()->get('id'))
					 -> first();
			
			$Validation = Validator::make($req->all(), [
				'pname'   => 'required',
				'pcat'    => 'required',
				'pqty'    => 'required',
				'psell'   => 'required',
				'pmrp'    => 'required',
				'pdetail' => 'required'
			]);

			if($Validation->fails()){
				return back()
					->with('errors', $Validation->errors())
					->withInput();
			}
			
			if($req->pshop==null){
				$shopname = $userData->username;
			}else{
				$shopname = $req->pshop;
			}
			
			$status1= DB::table('tbl_prod_details')->insert([
					'prod_id'           => null,
					'prod_name'         => $req->pname,
					'prod_details'      => $req->pdetail,
					'prod_MRP_price'    => $req->pmrp,
					'prod_SELLER_price' => $req->psell,
					'prod_qty'          => $req->pqty,
					'created_date'      => Date('yy-m-d h:i:s'),
					'prod_shop'         => $shopname,
					'prod_cat'          => $req->pcat
					]);
			
			$pid = DB::table('tbl_prod_details')->orderBy('prod_id','desc')->value('prod_id');
			
			$imgUp = DB::table('tbl_prod_image')->insert([
					'prod_id' => $pid
					]);
				
			if($req->hasFile('pimg1')){
				$file = $req->file('pimg1');
				$file->move('img/shop',$pid.'v1.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v1.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image1'=>$imageLink]);
			}
			if($req->hasFile('pimg2')){
				$file = $req->file('pimg2');
				$file->move('img/shop',$pid.'v2.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v2.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image2'=>$imageLink]);
			}
			if($req->hasFile('pimg3')){
				$file = $req->file('pimg3');
				$file->move('img/shop',$pid.'v3.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v3.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image3'=>$imageLink]);
			}
			if($req->hasFile('pimg4')){
				$file = $req->file('pimg4');
				$file->move('img/shop',$pid.'v4.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v4.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image4'=>$imageLink]);
			}
			
			if(!$status1){
				$req->session()->put('msg', 'Product Insertion Failed !');
				return redirect('/addDetails');
			}else{
				return redirect('/product-details/'.$pid);
			}
    	}
    	else{
    		$req->session()->put('msg', 'Login First Please !');
			return redirect('/login');
    	}
    }
	
	public function UpdateProduct(Request $req){
    	if( $req->session()->has('id') ){
    		
			$userData = DB::table('users')
					 -> where('userid', $req->session()->get('id'))
					 -> first();
			
			$Validation = Validator::make($req->all(), [
				'pname'   => 'required',
				'pqty'    => 'required',
				'psell'   => 'required',
				'pmrp'    => 'required',
				'pdetail' => 'required'
			]);

			if($Validation->fails()){
				return back()
					->with('errors', $Validation->errors())
					->withInput();
			}
			
			if($req->pshop==null){
				$shopname = $userData->username;
			}else{
				$shopname = $req->pshop;
			}
			
			$pid = $req->pid;
			
			$status1 = DB::table('tbl_prod_details')
					-> where('prod_id',$pid)-> update([
						'prod_name'         => $req->pname,
						'prod_details'      => $req->pdetail,
						'prod_MRP_price'    => $req->pmrp,
						'prod_SELLER_price' => $req->psell,
						'prod_qty'          => $req->pqty,
						'prod_shop'         => $shopname
						]);
			
			
			$imgSet = DB::table('tbl_prod_image')
				   -> where('prod_id', $pid)
				   -> first();
			
			if(!$imgSet){
				$imgUp = DB::table('tbl_prod_image')->insert([
						'prod_id' => $pid
						]);
			}
				
			if($req->hasFile('pimg1')){
				$file = $req->file('pimg1');
				$file->move('img/shop',$pid.'v1.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v1.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image1'=>$imageLink]);
			}
			if($req->hasFile('pimg2')){
				$file = $req->file('pimg2');
				$file->move('img/shop',$pid.'v2.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v2.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image2'=>$imageLink]);
			}
			if($req->hasFile('pimg3')){
				$file = $req->file('pimg3');
				$file->move('img/shop',$pid.'v3.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v3.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image3'=>$imageLink]);
			}
			if($req->hasFile('pimg4')){
				$file = $req->file('pimg4');
				$file->move('img/shop',$pid.'v4.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'v4.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_image')
							-> where('prod_id', $pid)
							-> update(['image4'=>$imageLink]);
			}
			
			if(!$status1){
				$req->session()->put('msg', 'Product Information Update Failed !');
				return redirect('/product-details/'.$pid);
			}else{
				return redirect('/product-details/'.$pid);
			}
    	}
    	else{
    		$req->session()->put('msg', 'You Have To Login First !');
			return redirect('/login');
    	}
    }
}
