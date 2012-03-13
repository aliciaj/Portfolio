/* Author: alicia brooks

*/

//removes or adds text on focus or blur of input fields
	autoFill = function(id, v){
				
		$(id).attr({ value: v, 'class': 'normal' }).focus(function(){
		if($(this).val()==v){
			$(this).val("").attr({'class':'focus'});
			
		}
		}).blur(function(){
			$(this).attr({'class':'normal'});
			if($(this).val()==""){
				$(this).val(v);
			}
		});
	};
	
	//calling autofill on fields that need it.
	autoFill($("#name"), "Name:");
	autoFill($("#email"), "Email:");
	autoFill($("#comments"), "Comments:");
	
	
// center vertically 


//Form Validation

	$('#contactform').live("submit",function(){
		if($('input[name="name"]').val()==="Name:" 
		|| $('input[name="email"]').val()==="Email:" 
		|| $('input[name="comments"]').val()==="Comments:"){
			$('#error').html("Please fill out fields. Do not leave default information.");
			return false;
		};
		
	});
	
	//$('#thanks').show('slow', function(){});
	
	$("#contactform").validate({
	  rules: {
	    email: {
	      required: true,
	      email: true,
	      //minlength: 5
	    },
	    name: {
	    	required:true,
	    	//minlength: 5
	    },
	    comments: {
	    	required:true,
	    	//minlength: 5
	    }
	    
	  }
	});