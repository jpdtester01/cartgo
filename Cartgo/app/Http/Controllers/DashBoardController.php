<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Validator;

class DashBoardController extends Controller
{
	public function index(Request $req){
		
		
		if( $req->session()->has('id') ){
			
			$getData = DB::table('tbl_prod_details')
					-> rightJoin('tbl_prod_image','tbl_prod_details.prod_id','=','tbl_prod_image.prod_id')
					-> orderBy('created_date','desc')
					-> get();
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
						
			$users   = DB::table('users')
					-> get();
									
			$OrderData = DB::table('tbl_order_details')
					  -> leftJoin('users','tbl_order_details.order_by','=','users.userid')
					  -> get();
		
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$trendProd = DB::table('tbl_prod_visits')
					  -> leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
					  -> groupBy('tbl_prod_visits.prod_id')
					  -> orderBy(DB::raw('count(tbl_prod_visits.prod_id)'),'desc')
					  -> get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
					  
			$imgData = DB::table('tbl_prod_image')
					  ->get();
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();

			$WishData = DB::table('tbl_wishlist')->leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')->where('tbl_wishlist.user_id',$req->session()->get('id'))->get();		 					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['prodData'=>$getData, 'users'=>$users, 'userData'=>$userData, 'historyData'=>$historyData, 'imgData'=>$imgData, 'trendProd'=>$trendProd, 'CartData'=>$CartData, 'SiteData'=>$SiteData, 'WishData'=>$WishData, 'TimeData'=>$TimeData, 'OrderData'=>$OrderData, 'site'=>'DashBoard']);
			
		}else{
			$req->session()->put('msg', 'You Have To Login First !');
			return redirect('/login');
		}
    }
	
}
