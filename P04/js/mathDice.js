//Código jQuery para hacer la animacion de los dados asi como la adicion a los values
var orden=false;
var expresion=null;
$(document).ready(function(){

	//Primera fila-->Azules
	$(".A").click(function(){
		if(orden==false){
			var value =$(this).attr("value");
			var clase=$(this).attr("class");
			$("#divResultado").append("<div class='col-sm-2 "+clase+"'  value="+value+">"+value+"</div>");
			$(this).attr("style","background-color:black;color:black;");
			$("#divResultado").append("<input type='text' value='"+value+"' hidden>");
			orden=true;
			if (expresion==null) {	
				 expresion=value;
			} else{	expresion+=value; };
			$("#expResultado").attr("value",expresion);

		}




	})
	//Segunda fila-->Verdes
	$(".B").click(function(){
		if(orden==false){
			var value =$(this).attr("value");
			var clase=$(this).attr("class");
			if (expresion==null) {
				 expresion=value;
			} else{	expresion+=value;};
			$("#divResultado").append("<div class='col-sm-2 "+clase+"'  value="+value+">"+value+"</div>");
			$(this).attr("style","background-color:black;color:black;");
			$("#divResultado").append("<input type='text' value='"+value+"' hidden>");
			orden=true;
			$("#expResultado").attr("value",expresion);

		}



	})
	//Ultima fila-->Operaciones/naranja 
	$(".D").click(function(){
		if(orden==true){
			var value =$(this).attr("value");
			var clase=$(this).attr("class");
			if (expresion==null) {
			  		expresion=value;
			} else{	expresion+=value;};
			$("#divResultado").append("<div class='col-sm-2 "+clase+"'  value="+value+">"+value+"</div>");
			//$(this).attr("style","background-color:black;color:black;");
			$("#divResultado").append("<input type='text' value='"+value+"' hidden>");
			orden=false;
			$("#expResultado").attr("value",expresion);

		}

	})
	//Penultima fila-->Resultado amarillo
	$(".C").click(function(){
		if(orden==false){
			var value =$(this).attr("value");
			var clase=$(this).attr("class");
			if (expresion==null) {	
					expresion=value;
			} else{	expresion+=value; };
			$("#divResultado").append("<div class='col-sm-2 "+clase+"'  value="+value+">"+value+"</div>");
			$(this).attr("style","background-color:black;color:black;");
			$("#divResultado").append("<input type='text' value='"+value+"' hidden>");
			orden=true;
			$("#expResultado").attr("value",expresion);
		}

	})








});