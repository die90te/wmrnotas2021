function ocultar(){

  document.getElementById('dbtn').style.display = 'none';
  document.getElementById('hide').style.display = 'none';
  document.getElementById('religion').style.border = 'none';
  document.getElementById('asistencia').style.border = 'none';
  document.getElementById('comment').style.border = 'solid 1px';
  


}
////////////////////
function ocultarAD(){

  document.getElementById('dbtn').style.display = 'none';
  document.getElementById('ui-id-1').style = 'none';
  document.getElementById('ui-id-3').style.display = 'none';
  document.getElementById('ui-id-5').style.display = 'none';
  window.print();
  window.location.replace('http://localhost/wmr2019/default/sistema/admin')
   
}
function bg(){
  
  document.body.style.backgroundColor = "red";
   
}
///////////////

   function impri() {

      if(confirm("¿Imprimir Informe?")) {        

       ocultar();
       window.print();
       location.reload();

      }

      return false;

      } 
//////////////////////////////////////
function verasig()
{
  document.getElementById('opc').style.display = 'block';
  //alert("ASIGNATURAS");
}
 //////////////////////////////////////////////////////
 /************************************************************************************************************************************/
 //////////notas primer semestre///////////////////////
$( document ).ready(function() {
 
    $.ajax({                     
             type: "POST",                 
             url: "http://localhost/wmr2019/default/public/informe1s.php",                    
             data: $("#formularios1").serialize(),
             success: function(data)            
             {
               $('#resultado').html(data);
                     
             }
         });
 
    
 
});

 //////////fin notas primer semestre///////////////////////
 /************************************************************************************************************************************/
 //////////notas segundo semestre///////////////////////

 $( document ).ready(function() {
 
    $.ajax({                     
             type: "POST",                 
             url: "http://localhost/wmr2019/default/public/informe2s.php",                    
             data: $("#formularios2").serialize(),
             success: function(data)            
             {
               $('#resultado2').html(data);
                     
             }
         });
 
    
 
});

         
 //////////fin notas segundo semestre///////////////////////
 /************************************************************************************************************************************/
 ////////// INFORMAE FINAL///////////////////////

 $( document ).ready(function() {
 
    $.ajax({                     
             type: "POST",                 
             url: "http://localhost/wmr2019/default/public/informefinal.php",                    
             data: $("#formulariofinal").serialize(),
             success: function(data)            
             {
               $('#resultadofinal').html(data);
                     
             }
         });
 
    
 
});

         
 //////////fin INFORME FINAL     //////////////////////

 /************************************************************************************************************************************/
////////////// guardar datos alumnos y promedios/////////
   $( document ).ready(function() {
 
      
      $('#prom1s').click(function(){
        var url = "http://localhost/wmr2019/default/public/promedios.php";
        $.ajax({                     
           type: "POST",                 
           url: url,                    
           data: $("#formularioprom1s").serialize(),
           success: function(data)            
           {
             $('#respp').html(data);
                   
           }
         });
        var url2 = "http://localhost/wmr2019/default/public/datos_alumnos.php";
        $.ajax({                       
           type: "POST",               
           url: url2,                    
           data: $("#formularioda").serialize(),
           success: function(data)            
           {
             $('#respda').html(data);
             alert("Datos Guardados");
             //ocultar();window.print();
             location.reload(false);                
           }
         });
      });

    });
/////////////////// fin datos y prmos informe 1er semestre /////////////
/************************************************************************************************************************************/
///////// informe 2do semestre///////////////////
  $( document ).ready(function() {
 
      $('#proms').click(function(){
        var url = "http://localhost/wmr2019/default/public/promedios2s.php";
        $.ajax({                     
           type: "POST",                 
           url: url,                    
           data: $("#formulariop2").serialize(),
           success: function(data)            
           {
             $('#respp').html(data);
                  
           }
         });
        var url2 = "http://localhost/wmr2019/default/public/datos_alumnos2s.php";
        $.ajax({                       
           type: "POST",               
           url: url2,                    
           data: $("#formularioda").serialize(),
           success: function(data)            
           {
             $('#respda').html(data);
             alert("Datos Guardados");
             //ocultar();window.print();
             location.reload(false);                
           }
         });
      });

    });

////// fin informe segundo semestre///////////////////
/************************************************************************************************************************************/
////////////notas admin/////////////////////////////////
$( document ).ready(function() {
 

      $('#notas3').click(function(){      

        var url = "http://localhost/wmr2019/default/public/notasadmin.php";

        $.ajax({                        

           type: "POST",                 

           url: url,                    

           data: $("#notasadmin").serialize(),

           success: function(data)            

           {

             $('#respnotas3').html(data);           

           }

         });

         

      });

    });
///////fin nadmin//////////
/************************************************************************************************************************************/
///////////////////ver profes//////////////////////////////
$( document ).ready(function() {
 
      $('#imprimir').click(function(){
        window.print();location.reload(false);
      });
    });

$( document ).ready(function() {
 
      $('#bnotasp').click(function(){   
        var url = "http://localhost/wmr2019/default/public/livetable/rver.php";
        $.ajax({     
           type: "POST",  
           url: url,     
           data: $("#notasp").serialize(),
           success: function(data)    
           {
             $('#respnotasp').html(data);     
           }
         });
      });
    });
///////////////////////////////////////////////////////////////
/************************************************************************************************************************************/
 ////////// BUSCAR ALUMNO   ////////////////////

$( document ).ready(function() {
 
  $( "#balumnos" ).click(function() {
    
     if(document.getElementById('alumnos_rut').value.length>7)
     {
        $.ajax({                        

             type: "POST",                 

             url: "http://localhost/wmr2019/default/public/balumno.php",                    

             data: $("#falumnos").serialize(),

             success: function(data)            

             {

               $('#rfalumnos').html(data);           

             }

           });
     }
     else
     {
        alert('Verifique RUT');
        document.getElementById('alumnos_rut').focus();
        //document.getElementById('alumnos_rut').style.border="solid 1px red";
     }
     

  });

});
         
 //////////FIN buscar ALUMNO     //////////////////////

 /************************************************************************************************************************************/
/************************************************************************************************************************************/
////////////ASIGNATURAS////////////////////////
/*$( document ).ready(function() {
 

      $('#verasig').click(function(){      

        //alert("ASIGNATURAS");

        $.ajax({                        

                    

           url: "http://localhost/wmr2019/default/public/asignaturas.php",                    

            

           success: function(data)            

           {

             $('#vasignaturas').html(data);           

           }

         });

         

      });

    });*/
/////////////////////////////



 /************************************************************************************************************************************/
