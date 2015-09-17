<<?php

    $Grados = $_POST['Grados'];
//    $Primero = array ("Primero_A","Primero_B","Primero_C");
    $Primero_A = array("Danzas","Teatro","Dibujo");
    $Primero_B = array("Danzas","Musica");
    $Primero_C = array("Teatro","Dibujo","Musica");
    
    $arrayretorna;
    
    $SegundoA = array("Teatro","Dibujo");
    $SegundoC = array("Teatro","Musica");
    
    $Curso = "Selecione Curso".
                
    $A = "<select name= 'Curso' id= 'Curso'>"
         ."Primero A";
 
    
    $P_A =  "<option value='Selecciona'>Seleccione un Opción</option>"
           ."<option value='DA'>Danzas</option>"
           ."<option value='T'>Teatro</option>"
           ."<option value='D'>Dibujo</option>";
    
    $B = "<select name= 'Curso' id= 'Curso'>"
          ."Primero B";
    
    $P_B =  "<option value='Selecciona'>Seleccione un Opción</option>"
           ."<option value='Danzas'>Danzas</option>"
           ."<option value='Musica'>Musica</option>";
    
    $C = "<select name= 'Curso' id= 'Curso'>"."Primero C";
    
    $P_C =  "<option value='Selecciona'>Seleccione un Opción</option>"
           ."<option value='T'>Teatro</option>"
           ."<option value='D'>Dibujo</option>"
           ."<option value='Musica'>Musica</option>";
    
   $boton = "<button type ='submit'>Enviar</button>";
    
        
    if($Grados=="Primero"){
        
        echo "$Curso"."$A"."$P_A";
        echo "$Curso"."$B"."$P_B";
        echo "$Curso"."$C"."$P_C";
        echo "$boton";
    
    }else {}
    
    


                    



















        
        
   




?>

