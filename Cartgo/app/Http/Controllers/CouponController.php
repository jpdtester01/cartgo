<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Validator;

class CouponController extends Controller
{
	public function Index(Request $req){
		
		
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
					  
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$couponDT = DB::table('tbl_coupon')
					 -> get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('coupon',['userData'=>$userData, 'historyData'=>$historyData, 'CartData'=>$CartData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'couponDT'=>$couponDT]);
			
		}else{
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
			$couponDT = DB::table('tbl_coupon')
					 -> get();
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('coupon',['SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'couponDT'=>$couponDT]);
			
		}
    }
	
}
