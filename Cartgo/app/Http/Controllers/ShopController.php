<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Validator;

class ShopController extends Controller
{
	public function Index($searchType, $value, $sorts=null, Request $req){
		
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
			
			if($searchType == 'category'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> get();
				}
			}else if($searchType == 'searchBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> get();
				}
			}else if($searchType == 'shopBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> get();
				}
			}
			
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
					 
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			$WishData = DB::table('tbl_wishlist')->leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')->where('tbl_wishlist.user_id',$req->session()->get('id'))->get();

			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			$SearchData = array("searchType"=>$searchType,"value"=>$value);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'CartData'=>$CartData, 'searchResult'=>$searchResult, 'SearchData'=>$SearchData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'imgData'=>$imgData,  'WishData'=>$WishData,'site'=>'products']);
			
		}else{
			
			if($searchType == 'category'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> get();
				}
			}else if($searchType == 'searchBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> get();
				}
			}else if($searchType == 'shopBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> get();
				}
			}
			
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			$SearchData = array("searchType"=>$searchType,"value"=>$value);
			
			return view('template.section',['searchResult'=>$searchResult, 'SearchData'=>$SearchData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'imgData'=>$imgData,'site'=>'products']);
			
			
		}
    }
	
	public function Index2($searchType, $value, $sorts=null, $min=null, $max=null, Request $req){
		
		if( $req->session()->has('id') ){
			
			// $getData = DB::table('tbl_prod_details')->orderBy('created_date','desc')->get();
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			// $trendProd = DB::table('tbl_prod_visits')
					  // -> leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
					  // -> groupBy('tbl_prod_visits.prod_id')
					  // -> orderBy(DB::raw('count(tbl_prod_visits.prod_id)'),'desc')
					  // -> get();
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			
			if($searchType == 'category'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else if($sorts  != null && $sorts == 'rangeBy'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> whereBetween('tbl_prod_details.prod_MRP_price',[$min,$max])
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> get();
				}
			}else if($searchType == 'searchBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else if($sorts  != null && $sorts == 'rangeBy'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> whereBetween('tbl_prod_details.prod_MRP_price',[$min,$max])
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> get();
				}
			}else if($searchType == 'shopBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else if($sorts  != null && $sorts == 'rangeBy'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> whereBetween('tbl_prod_details.prod_MRP_price',[$min,$max])
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> get();
				}
			}
			
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
					 
			$imgData  = DB::table('tbl_prod_image')
					 -> get();

			$WishData = DB::table('tbl_wishlist')->leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')->where('tbl_wishlist.user_id',$req->session()->get('id'))->get();
			
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			$SearchData = array("searchType"=>$searchType,"value"=>$value);
			
			return view('template.section',['userData'=>$userData, 'historyData'=>$historyData, 'CartData'=>$CartData, 'searchResult'=>$searchResult, 'SearchData'=>$SearchData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'imgData'=>$imgData,'WishData'=>$WishData,'site'=>'products']);
			
		}else{
			
			if($searchType == 'category'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else if($sorts  != null && $sorts == 'rangeBy'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> whereBetween('tbl_prod_details.prod_MRP_price',[$min,$max])
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_cat',$value)
								 -> get();
				}
			}else if($searchType == 'searchBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else if($sorts  != null && $sorts == 'rangeBy'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> whereBetween('tbl_prod_details.prod_MRP_price',[$min,$max])
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_name','like','%'.$value.'%')
								 -> get();
				}
			}else if($searchType == 'shopBy'){
				if($sorts != null && $sorts == 'l2%hi'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','asc')
								 -> get();
				}else if($sorts  != null && $sorts == 'h2%lo'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> orderBy('tbl_prod_details.prod_MRP_price','desc')
								 -> get();
				}else if($sorts  != null && $sorts == 'rangeBy'){
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> whereBetween('tbl_prod_details.prod_MRP_price',[$min,$max])
								 -> get();
				}else{
					$searchResult = DB::table('tbl_prod_details')
								 -> where('tbl_prod_details.prod_shop','like','%'.$value.'%')
								 -> get();
				}
			}
			
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
			
			$imgData  = DB::table('tbl_prod_image')
					 -> get();
			
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			$SearchData = array("searchType"=>$searchType,"value"=>$value);
			
			return view('template.section',['searchResult'=>$searchResult, 'SearchData'=>$SearchData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'imgData'=>$imgData,'site'=>'products']);
			
			
		}
    }
	
}
