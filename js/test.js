$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});

	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

	$("#est").click(function(){
		if((this.value=="Disponible") || (this.value=="Dañada")){
			$("#inser_usu").attr("disabled",true);
		}
		else if(this.value=="En uso"){
			$("#inser_usu").attr("disabled",false).attr("required",true);
		}
	});

});