function isSE(data) {
	var rt = JSON.parse(data.status);
	if(data.status === 403){
		alert("다시 로그인 하세요.");
		location.href = "/";
	}
}

function fn_control_mouse(){
	$(document).bind("contextmenu", function(e){
		return false;
	});
	$(document).bind("selectstart", function(e){
		return false;
	});
	$(document).bind("gragstart", function(e){
		return false;
	});
}