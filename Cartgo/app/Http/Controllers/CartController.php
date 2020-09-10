<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

class CartController extends Controller
{
    public function Index(Request $req){
    	if( $req->session()->has('id') ){
			
			$CartData = DB::table('tbl_cart')->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')->where('tbl_cart.user_id',$req->session()->get('id'))->get();
			$userData = DB::table('users')->where('userid', $req->session()->get('id'))->first();
			$SiteData = DB::table('tbl_sitedata')-> get();
			$imgData  = DB::table('tbl_prod_image')->get();
			$WishData = DB::table('tbl_wishlist')->leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')->where('tbl_wishlist.user_id',$req->session()->get('id'))->get();
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['CartData'=>$CartData,'userData'=>$userData,'SiteData'=>$SiteData,'imgData'=>$imgData,'TimeData'=>$TimeData, 'WishData'=>$WishData,'site'=>'cart']);
			
		}else{
			$req->session()->put('msg', 'Please Login First !');
			return redirect('/login');
		}
    }
	
	public function checkout(Request $req){

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
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'CartData'=>$CartData, 'WishData'=>$WishData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'checkout']);
			
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
			
			return view('template.section',['CartData'=>$CartData, 'imgData'=>$imgData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'site'=>'checkout']);
			
		}
    }

    
}
