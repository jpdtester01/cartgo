<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Validator;

class OrderController extends Controller
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
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			$OrderData = DB::table('tbl_order_details')
					  -> where('order_by',$req->session()->get('id'))
					  -> groupBy('order_id')
					  -> get();
			
			return view('order',['userData'=>$userData, 'historyData'=>$historyData, 'CartData'=>$CartData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'OrderData'=>$OrderData]);
			
		}else{
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('order',['SiteData'=>$SiteData, 'TimeData'=>$TimeData]);
			
		}
    }
	
	public function SrcOrder($ord=null, Request $req){
		
		
		$OrderData = DB::table('tbl_order_details')->where('order_id',$ord)->get();
		
		if($OrderData!=null){
			$tabData = 
			'<h2># ORDER ID: '.$ord.'</h2>
			<div class="table-responsive">
				<table class="table cart-table">
					<thead class="table-title">
						<tr>
							<th class="namedes">PRODUCT NAME</th>
							<th class="unit">UNIT PRICE</th>
							<th class="quantity">QUANTITY</th>
							<th class="valu">TOTAL</th>
						</tr>
						<tbody id="CartBody">';
			$grand = 0;
			$creation = '';
			$state = '';
			foreach($OrderData as $dt)
			{
				$tabData = $tabData .
				'<tr class="table-info">
					<td class="namedes">
						<h2><a href="/product-details/'.$dt->prod_id.'">'.$dt->prod_name.'</a></h2>
					</td>
					<td class="unit">
						<h5>$'.$dt->prod_MRP_price.'</h5>
					</td>
					<td class="quantity">
						<h5>$'.$dt->prod_qty.'</h5>
					</td>
					<td class="valu">
						<h4><span>$'.$dt->total_price.'<span></h4>
					</td>
				</tr>';
			$grand = $dt->grand_price;
			$creation = $dt->creation_date;
			$state = $dt->order_status;
			}
			echo $tabData .
			'</tbody>
				</thead>
					</table>
				</div>
				<p>Created At : <span>'.$creation.'</span></p><p> Status : <span>'.$state.'</span></p>
				<p class="grand-pr">Grand Total : <span class="grand-pr-at">'.$grand.'</span></p><br>
				<a href="/Order"> Search Again </a> <a href="/"> continue </a>';
		}else{
			echo '<p class="confirm-data"> Invalid Request : Order Number Incorrect. </p>';
		}
	}
}
