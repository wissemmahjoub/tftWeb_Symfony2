$(document).ready(function(){
     $('.input-append.date .add-on').datepicker({
	 format: "dd/mm/yyyy",
			startView: 1,
			daysOfWeekDisabled: "3,4",
			autoclose: true,
			todayHighlight: true	
    });
    
    $('.input-append.date #sandbox-advance').datepicker({
				
                                format: "dd/mm/yyyy",
			startView: 1,
			daysOfWeekDisabled: "3,4",
			autoclose: true,
			todayHighlight: true
	   });
	 
        
        
})