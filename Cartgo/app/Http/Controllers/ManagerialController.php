<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Validator;

class ManagerialController extends Controller
{
	public function Payments(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();

			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'payment']);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'payment']);
			
		}
    }

    public function invite(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'invite']);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'invite']);
			
		}
    }

    public function reward(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();					  
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'reward']);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'reward']);
			
		}
    }

    public function order(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'order']);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'order']);
			
		}
    }
	
	public function Conditions(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('Conditions',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('Conditions',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}
    }
	
	public function SiteMap(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('SiteMap',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('SiteMap',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}
    }
	
	public function services(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('services',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('services',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}
    }
	
	public function dispute(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'dispute']);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData,'site'=>'dispute']);
			
		}
    }

	public function Blog(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('Blog',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('Blog',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}
    }
	
	public function FAQ(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
					  
			$WishData = DB::table('tbl_wishlist')
					 -> leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_wishlist.user_id',$req->session()->get('id'))
					 -> get();

			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'faq']);
			
		}else{
			
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'faq']);
			
		}
    }
	
}
