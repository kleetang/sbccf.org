$("#btnSubmit").submit(function(){
	var name = $("#name").val();
	var pray = $("#pray").val();
	if(name=="" || pray==null) {
		alert('Fill this field');
		return false;
	}


});