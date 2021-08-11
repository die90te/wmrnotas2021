//validacion checkbox

function validacion(obj) 
{
  limite=1;
  num=0;
  if (obj.checked) 
  {
	for (i=0; ele=obj.form.elements[i]; i++)
	  if (ele.checked) num++;
  if (num>limite)
  {
	obj.checked=false;
	alert ("Solo puede enviar un turno a la vez") ;
	} 
  }
}  
//////////////////////////
//////////////////
function val_tipo()
{    	
	if(document.form_reg.login.value > '30')
	{
		document.form_reg.usuarios[tipo].value = 'LIDER';
	}
}
//////////////////
//function goLite(FRM,BTN)
//{
//   window.document.forms[FRM].elements[BTN].style.color = "#339900";
//   window.document.forms[FRM].elements[BTN].style.backgroundColor = "#FFFFFF";
//}
//
//function goDim(FRM,BTN)
//{
//   window.document.forms[FRM].elements[BTN].style.color = "#EEFFFF";
//   window.document.forms[FRM].elements[BTN].style.backgroundColor = "#339900";
//}
//
////////////
function esInteger(e){
var charCode
if (navigator.appName == "Netscape"){
charCode = e.which
}
else{
charCode = e.keyCode}	
if (charCode < 48 || charCode > 57){
alert("Por favor teclee solo numeros en este campo!");	
return false
}
else{
return true}
}

