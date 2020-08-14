$(document).ready(function(){
	var slidIndex = 1;
	showDivss(slidIndex);

	function moving(ni) {
	  showDivss(slidIndex += ni);
	}

	function showDivss(ni) {
	  var j;
	  var xl = document.getElementsByClassName("Rectangle_388");
	  if (ni > xl.length) {slidIndex = 1}
	  if (ni < 1) {slidIndex = xl.length}
	  for (j = 0; j < xl.length; j++) {
	    xl[j].style.display = "none";  
	  }
	  xl[slidIndex-1].style.display = "block";  
	  xl[slidIndex].style.display = "block";  
	  xl[slidIndex+1].style.display = "block";  
	  xl[slidIndex+2].style.display = "block";  
	}
});

var slidIndex = 1;
showDivss(slidIndex);

function moving(ni) {
  showDivss(slidIndex += ni);
}

function showDivss(ni) {
  var j;
  var xl = document.getElementsByClassName("Rectangle_388");
  if (ni > xl.length) {slidIndex = 1}
  if (ni < 1) {slidIndex = xl.length}
  for (j = 0; j < xl.length; j++) {
    xl[j].style.display = "none";  
  }
  xl[slidIndex-1].style.display = "block";  
  xl[slidIndex].style.display = "block";  
  xl[slidIndex+1].style.display = "block";  
  xl[slidIndex+2].style.display = "block";  
}

function revChanger(){
	var face = document.getElementById("rate").value;
	if(face<2){
		$('#faces').html('<i class="fa fa-thumbs-down"></i>');
	}else if(face<3){
		$('#faces').html('<i class="fa fa-frown-o"></i>');
	}else if(face<4){
		$('#faces').html('<i class="fa fa-meh-o"></i>');
	}else if(face<5){
		$('#faces').html('<i class="fa fa-smile-o"></i>');
	}else{
		$('#faces').html('<i class="fa fa-thumbs-up"></i>');
	}
}



