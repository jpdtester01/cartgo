$(document).ready(function(){

	$('#sort-by').on('change', function(e){
		var optionSelected = $ ("option:selected", this);
		var valueSelected = this.value;
		
		window.location.replace(valueSelected);
	});

	var slideIndex = 1;
	showDivs(slideIndex);

	function mover(n) {
	  showDivs(slideIndex += n);
	}

	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("Rectangle_38");
	  if (n > x.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  x[slideIndex-1].style.display = "block";  
	  x[slideIndex].style.display = "block";  
	  x[slideIndex+1].style.display = "block";  
	  x[slideIndex+2].style.display = "block";  
	}
});

var slideIndex = 1;
showDivs(slideIndex);

function mover(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("Rectangle_38");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
  x[slideIndex].style.display = "block";  
  x[slideIndex+1].style.display = "block";  
  x[slideIndex+2].style.display = "block";  
}

function CatchImage(img) {
	alert(img);
	
}

function qtyChange(action,pid,price)
{
	var action = action;
	var pid = pid;
	var price = price;
	var qty = document.getElementById("qtytxt-"+pid).value;
	var tot = document.getElementById("subtottxt").value;
	
	if(action=='add'){
		var newqty = parseInt(qty) + 1;
		var newprice = parseInt(price) * newqty;
		var newtot = parseInt(tot) + parseInt(price);
	}else{
		if(qty!=0){
			var newqty = parseInt(qty) - 1;
			var newprice = parseInt(price) * newqty;
			var newtot = parseInt(tot) - parseInt(price);
		}else{
			var newqty = 0;
			var newprice = 0;
			var newtot = tot;
		}
	}
	
	$.ajax({
	   type:'GET',
	   url:'/QtyChange/'+pid+'/'+newqty,
	   success:function(data) {
		   $("#qtytxt-"+pid).val(newqty);
		   $("#subtottxt").val(newtot);
		   $("#tottxt").val(newtot);
		   $("#val-"+pid).html('$'+newprice);
		   $("#subtot").html(newtot);
		   $("#tot").html(newtot);
	   }
	});
}

function DelCart(pid)
{
	var pid = pid;
	
	$.ajax({
	   type:'GET',
	   url:'/DelCart/'+pid,
	   success:function(data) {
		   $("#CartBody").html(data);
	   }
	});
}

function searchListBy()
{
	var txt = document.getElementById("srcTxt").value;
	if(txt != ""){
		window.location.replace('/shop/withtag/searchBy/'+txt);
	}else{
		alert('Type Search Keywords in the Search Box.');
	}
}

function DelWish(pid)
{
	var pid = pid;
	
	$.ajax({
	   type:'GET',
	   url:'/DelWish/'+pid,
	   success:function(data) {
		   $("#wishBody").html(data);
	   }
	});
}

function AddCart(val, pid)
{
	var pid = pid;
	var val = val;
	
	$.ajax({
	   type:'POST',
	   url:'/AddCart',
	   data:{
		   _token : val,
		   pid : pid
	   },
	   success:function(data) {
		   $("#sp-"+pid).html(data);
	   }
	});
}

function AddWish(val, pid)
{
	var pid = pid;
	var val = val;
	
	$.ajax({
	   type:'POST',
	   url:'/AddWish',
	   data:{
		   _token : val,
		   pid : pid
	   },
	   success:function(data) {
		   $("#spp-"+pid).html(data);
	   }
	});
}


function rangeShow(){
	var txt = document.getElementById("price-range").value;
	alert(txt);
	$('#price-amount').val(txt);
}

function CatchImage(linky){
	var img = "{{asset('img/shop/"+linky+"')}}";
	//alert(img);
	/*$('ImgDiv').html('<div id="filler"></div>');
	document.getElementById("filler").style.backgroundImage="url('{{asset('img/shop/47v1.ico')}}')";*/
}