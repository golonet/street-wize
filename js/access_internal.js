	




		var side = "left";
		
		function ngSliderText(){

			if(side =="left"){
				
				$('#animLogo').attr("src","images/cat_ayes2.png");
			    $('#animLogo').removeClass("catAyes");
			    $('#animLogo').addClass("catAyes2");
				
				side = "right";	
			}else{
				$('#animLogo').attr("src","images/cat_ayes.png");
			    $('#animLogo').removeClass("catAyes2");
			    $('#animLogo').addClass("catAyes");	

				side = "left";	
			}

			setTimeout(function() {
				ngSliderText();		
			},3000);			
		}
				

			
		ngSliderText();

/*
$('.swipebox').on('focus',function blurChange(e){
	var link="";
   
    var mask = $(this).parent(".view-seventh");
    
  
    mask.find(".mask").css({
    	   'opacity' : '1'
    	});
    
    mask.find("h4").addClass("accBorder");
 
});

$('.swipebox').on('focusout',function blurChange(e){
	var link="";
   
    var mask = $(this).parent(".view-seventh");

    mask.find(".mask").css({
    	   'opacity' : '0'
    	});
    
    mask.find("h4").removClass("accBorder");
 
});
*/