<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\feedback;
use Carbon\Carbon;
use Validator;

class contactController extends Controller
{
    public function show($id = null, Request $req){
    	
    	if( $req->session()->has('id') ){
    		$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$imgData = DB::table('tbl_prod_image')
					  ->get();
			
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['site'=>'contact'])->with(compact('userData','SiteData','TimeData','CartData','imgData'));
    	}
    	else{
    		$SiteData = DB::table('tbl_sitedata')
					  ->get();
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('template.section',['site'=>'contact'])->with(compact('userData','SiteData','TimeData','CartData'));
    	}
    }

    
    public function feedback(){
		$feedbackPost= DB::table('tbl_user_feedback')->insert([
				'userid'=> $req->session()->get('id'),
				'feedback'=> $request->feedback,
				]);

		if(!$feedbackPost){
			return redirect("/contact");
		}else{
			return redirect("/contact");
		}
	}
	
	public function auto($num, Request $request){
        
		// $fname1 = array('Alamin','Rana','Protap','Rangsor','Adele','Stephan','Haward','Hawkings','Kajal','Hars','Agarwal','Tom','Donald','Cruise','Trump','Abrahamn','Barak','Lincoln','Obama','Micheal','Rodrique','Habibul','Khan','Kashif','Rana','Chouwdhury','Akram','Yunus','Ali','Harold','Mike','Chansie','Chan','Jakie','Masum','Pari','Growwal','Kapil','Akash','Rahman','Rowan','Atkinson','Kooper','Lara','Brand','Silvania');
		// $fname2 = array('Kajal','Hars','Agarwal','Tom','Donald','Cruise','Trump','Abrahamn','Barak','Lincoln','Obama','Micheal','Rodrique','Habibul','Khan','Kashif','Rana','Chouwdhury','Akram','Yunus','Ali','Harold','Mike','Chansie','Chan','Jakie','Masum','Pari','Growwal','Kapil','Akash','Rahman','Rowan','Atkinson','Kooper','Lara','Brand','Silvania','Alamin','Rana','Protap','Rangsor','Adele','Stephan','Haward','Hawkings');
		// $lname1 = array('Chandler','Bong','Bing','Monica','Galler','Ross','Joey','Tribbiani','Rachel','Green','Pheobe','Buffay','Kate','William','Williamson','Casper','Ballick','Khan','Ranold','Rahman','Khandokar','Sultan','Kedar','Jami','Shahrukh','Flamingh','Nazim','Vuiyan','Kapoor','Nickie','Minaj','Ruth','Tom','Rina','Kher','Masan','Sharma','Datt','Jimmy','Fallen','Alan','Walker','Abul','Hayat','Vickey','Singhania');
		// $lname2 = array('Tribbiani','Rachel','Green','Pheobe','Buffay','Kate','William','Williamson','Casper','Ballick','Khan','Ranold','Chandler','Bong','Bing','Monica','Galler','Kher','Masan','Sharma','Datt','Jimmy','Fallen','Alan','Walker','Abul','Hayat','Vickey','Singhania','Ross','Joey','Rahman','Khandokar','Sultan','Kedar','Jami','Shahrukh','Flamingh','Nazim','Vuiyan','Kapoor','Nickie','Minaj','Ruth','Tom','Rina');
		// $email1 = array('@gmail.com','@outlook.com','@live.com','@yahoo.com','@hotmail.com','@express.com','@aiub.edu','@gov.bd','@facebook.com','@onelive.com','@foundings.org','@auctionAction.com','@Hollowin.com','@ymail.com','@laravel.com');
		
		$fname1 = DB::table('mock_data')->select('first_name')->get();
		$lname1 = DB::table('mock_data')->select('last_name')->get();
		$email1 = DB::table('mock_data')->select('email')->get();
		$gen1 = DB::table('mock_data')->select('gender')->get();
		$addrs1 = array('C Adams Lane, Andorra La Vella, Andorra','D Jackson Height st.,Saint Johns,Antigua ','F Liverpool Playyard,Buenos Aires,Argentina','A Yanbkshi Road,Canberra,Australia','D Lakveil Graveyard,Vienna,Austria','D Dankan Street,Manama,Bahrain','E Makentile Fort Road, Brasilia, Brazil.','A Albert Graham Road, Bandar Seri Begawan, Brunei.','C Lorial Grafens Road, Ottawa, Canada.','A Eskaton Road,Santiago, Chile.','B HardGain Road, Beijing, China.','K Serambag st.San Jose, Costa Rica.','E Idia Gate, Havana,Cuba. ','F Loganham Palace, Prague, Czechia.','A Californian St. Copenhagen, Denmark.','D Arter Rolen Road, Cairo, Egypt.','C Eskaton Palace Road, San Salvador, El Salvador.','B Cilliam Transmit Road, Helsinki, Finland.','F Billiard Road Fort Gate, Paris, France.','C Delta Prime Hospital Road, Berlin, Germany','M Royal Palace, Green Garden , Athens, Greece.','H Edward Field Residence, Saint Georges, Grenada.','E Sylvania Towar, Dhakeshwari, Dhaka, Bangladesh.','T Merul Badda Road, Dhaka, Bangladesh','D Citizen Square, Budapest, Hungary.','H Tokyo Square, Kermail, Tokyo, Japan.','J Lorenham Palace, Tehran, Iran.','M Resavoir Palace, Baghdad, Iraq.','R Beikstone Georgia, Rome, Italy.','G White House Residence, Kingston, Jamaica.','H Washinton View Fort Gate, Kuwait City, Kuwait.','D Norveil Tower, Tripoli, Libya.','H Oscean View Lane, Panama City, Panama.','T ARB Apartment, Monaco, Monaco.');
		// $post = DB::table('postdata')->get();
		
		for($i=1 ; $i<$num+1; $i++)
		{
			$rno = rand(0,999);
			$fname = $fname1[$rno]->first_name;
			$lname = $lname1[$rno]->last_name;
			$name = $fname.' '.$lname;
			$pass = md5($fname.$lname);
			$email = $email1[$rno]->email;
			$gender = $gen1[$rno]->gender;
			
			echo $i.".<br/>";
			echo "user_name".$name."<br/>";
			echo "Email : ".$email."<br/>";
			echo "password : ".$pass."<br/>";
			$phn = rand(999,99999)+rand(999,99999);
			$phone = rand(111,999).$phn;
			echo "phone : ".$phone."<br/>";
			echo "gender : ".$gender."<br/>";
			$address = rand(10,99)."/".rand(10,99).$addrs1[rand(0,33)];
			echo "address : ".$address."<br/>";
			
			// $status1= DB::table('user_login')->insert([
					// 'user_id'	=> null,
					// 'username'	=> $username,
					// 'email'  	=> $mail,
					// 'password'  => $fname
					// ]);
					
			// $id = DB::table('user_login')->where('username',$username)->value('user_id');
								
			$status2= DB::table('users')->insert([
					'userid'	=> null,
					'username'	=> $name,
					'email'		=> $email,
					'password'	=> $pass,
					'type'		=> 'user',
					'gender'	=> $gender,
					'address'	=> $address,
					'contact'	=> $phone
				]);
		}
    }
	
	public function auto1(Request $request){
        
		$ego = DB::table('mine')->get();
		
		for($i=0 ; $i<43; $i++)
		{
			$status2= DB::table('tbl_sitedata')->insert([
					'no'=> $i,
					'element'=> $ego[$i]->element,
					'data'=> $ego[$i]->data
				]);
		}
    }

    public function AutoRev(Request $request){
    	$data = array('Very nice product, I am Glad. THANK YOU','Enjoyed this product a lot, Got The delivery Fastest. Thank you for amazing service','Amazing Experience, Thanks a lot.','Awesome Delivery and packaging, Thanks for the intact product. Now i am trusting Cartgo A lot.','The product is authentic that i got. thank you so much for delivering such good product.','This can be a great gift as well, Thanks.','Amazing experience, Thank you Cartgo.','Cartgo delivery system is very organized and genuine, The product is very much well hearted taken.','Thank you Cartgo for this Awesome product','Just Loving this product very much, Thanks Cartgo.','Amazing Experience with genuinen product in hand, Thank you Cartgo for delivering.','Got the product in Cartgo at a very cheap price, the product is authentic, Thank you very much.','Cartgo product shipment is very much good, Thanks.','Amzing gift from Cartgo. Thank you.','I liked the product very much thank you.','Very good product, Thank you Cartgo','Fastest delivery ever, Thank you Cartgo.','Product is very Amazing, Using it very well, Thanks Cartgo.','Cartgo made the life much Easier, Thank you so much','Cartgo Many Many thanks for this awesome product, Congratulations for this great service ');
		
		$users = DB::table('users')->select('userid')->get();
		
		for($i=800152 ; $i<800175; $i++)
		{
			for($j=25 ; $j<30; $j++)
			{
				$user = $users[rand(1,165)]->userid;
				
				$status = DB::table('tbl_prod_review')
					   -> where('user_id',$user)
					   -> where('prod_id',$i)
					   -> first();
				
				if($status!=null){
					$user = $users[rand(1,165)]->userid;
				}

				$day = rand(10,30);
				$status1= DB::table('tbl_prod_review')->insert([
					'rev_no'	=> null,
					'user_id'	=> $user,
					'prod_id'	=> $i,
					'rating'	=> rand(2,5),
					'review'	=> $data[rand(0,19)],
					'time'		=> $j.Date(' M, yy h:i')
					]);
			}
		}
    }
}
