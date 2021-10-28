	function contactUs() {
	
		var isValida = true;
		
		$("form#contactUsForm :input,textarea").each(function(){
			
			 var input = $(this); 
		     var inputName = $(this).attr("name");
		     var inputValue = $(this).val();
	    	 
		        if(inputName=='name'){
		    	    
		    	    if(inputValue.length < 2 || !isNaN(inputValue)){
		    	    	input.css("border","1px solid red");
		        	    isValida = false;
		    		}else{
		    			input.css("border","1px solid #DADADA");
		        	} 		  	
		        }  

		        if(inputName=='mail'){
		            
		    	    var rega = /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/;
		    	    
		    	    if(inputValue.length==""){
		    	    	input.css("border","1px solid #DADADA");
		    	    	input.css("border","1px solid red");
		        	    isValida = false;		    	    	
		    	    }else{
			    	    if(rega.test(inputValue) == false) {
			    	    	input.css("border","1px solid red");
			    	    	
			        	    isValida = false;
			    		}else{
			    			input.css("border","1px solid #DADADA");
			    			
			        	} 
		    	    }
		  	
		        } 
		        
		        
		        /*
		        if(inputName=='city'){
		            
		    	    if(inputValue.length < 3 || !isNaN(inputValue)){
		    	    	input.css("border","1px solid red");
		        	    isValida = false;
		    		}else{
		    			input.css("border","1px solid #DADADA");
		        	} 		  	
		        }  
				*/
		        
		        if(inputName=='message'){
		    	    var rega = /^[אבגדהוזחטיכלמנסעפצקרשתץףןםa-zA-z0-9\s\.\-_\,\\/]+$/;
		    	    
		    	    if(inputValue.length>0){
			    	    if(rega.test(inputValue) == false) {
			    	    	input.css("border","1px solid red");
			        	    isValida = false;
			    		}else{
			    			input.css("border","1px solid #DADADA");
			        	} 
		    	    }
		        }
		        
		        if(inputName=='phone'){
		            
		        	var ta = /^\(?([0-9]{2,3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		    	    
		    	    if(ta.test(inputValue) == false) {
		    	    	input.css("border","1px solid red");
		        	    isValida = false;
		    		}else{
		    			input.css("border","1px solid #DADADA");
		        	} 		  	
		        } 		     
			 
		});

		if(!isValida){
			$('.notValidForm').html("- אחד  מן השדות אינו כתוב כראוי -");
		}
		
		return isValida; 
	}
