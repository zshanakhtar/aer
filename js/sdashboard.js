
var savesuccess=0;;

function submitmem(elem,str){

	var memberrow=$(elem).closest("tr").find("p,input,select");
	$("#member_action").val(str);
	$("#mem_id").val($(memberrow[0]).html());
	$("#member_name").val($(memberrow[1]).val());
	$("#gender").val($(memberrow[2]).val());
	$("#father_name").val($(memberrow[3]).val());
	$("#member_stream").val($(memberrow[4]).val());
	$("#year").val($(memberrow[5]).val());
	$("#team_mobile").val($(memberrow[6]).val());
	$("#member_email").val($(memberrow[7]).val());
	$("#roll").val($(memberrow[8]).val());
	var c=0;
	$("#sec3").find("input").each(function(){
	if(this.checkValidity())
		c++;
	});
	
	
	if(c==10||str=="del")
	{
		$("#sec3").submit();
		if(str=="del")
			delmem(elem);
		if(str=="save")
			updatemem(elem);
	}
	else
		alert("Please provide valid member details: No of errors "+(10-c));
	
	
	
}

function addmem(elem){
	// var memrows=$("#three").find("tr");
	// alert($(memrows[memrows.length-2]).html());
	var newmem=$(".empty-member.hidden").clone();
	var currentserial=$(".empty-member.hidden").find(".mem_serial").html();
	if($("#three").find("tr").length-2<= 4 )//Restriction for max members
	{
		currentserial++;
		$(".empty-member.hidden").find(".mem_serial").html(currentserial);
		// alert($(".empty-member.hidden").find(".mem_serial").html());
		$(newmem).find(".mem_serial").removeClass("mem_serial");
		// console.log($(".mem_serial"));
		$(newmem).removeClass("hidden");
		$(elem).closest("tr").before(newmem);
	}
	else
	{
		alert("Reached max members: "+($("#three").find("tr").length-3));
	}
}

function delmem(elem){
	$(elem).closest("tr")
	$(elem).closest("tr").remove();
}

function updatemem(elem){
	$(elem).closest("center").attr("style","display:inline-flex;");
	$(elem).replaceWith(
		"<button type=\"button\" onclick=\"submitmem(this,'update')\" class=\"btn btn-xs btn-info\">\n" +
"											<span class=\"glyphicon glyphicon-edit\"></span>\n" +
"											<br>\n" +
"											<span>Update</span>\n" +
"										</button>\n" +
"										&nbsp;\n" +
"										<button type=\"button\" onclick=\"submitmem(this,'del')\" name=\"submitbtn\" value=\"del\" class=\"btn btn-xs btn-danger\">\n" +
"											<span class=\"glyphicon glyphicon-trash\"></span>\n" +
"											<br>\n" +
"											<span>Remove</span>\n" +
"										</button>"
		);
}