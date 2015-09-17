<!DOCTYPE html
    
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
	<script src="js/jquery-1.11.3.js"></script>
<h3>Ingrese sus datos:</h3>
</head>
<body>
    <form action="Grados.php" method="post">
                        
            <fieldset>
                
                <legend>DATOS DEL ALUMNO</legend>
                
        <label>NOMBRE:</label>
        
        <input name="Nombre" id ="Nombre" type="text" placeholder="ESCRIBA SU NOMBRE"/>
        
        <br>
        <br>
        
         <label>APELLIDO:</label>
        
        <input name="Apellido" id ="Apellido" type="text" placeholder ="ESCRIBA SU APELLIDO"/>
            <br> 
            <br>
            
            <label> Seleccionar Grado</label>
                
                <select name ="Grados" id ="Grados">
                    
                    <option value="Selecciona">Seleccione una Opción</option>
                    <option value="Primero">Primero</option>
                    <option value='Segundo'>Segundo</option>";
                    
<!--                    <option value="Primero">Primero-B</option>
                    <option value="Primero">Primero-C</option>
                    <option value="Segundo">Segundo-A</option>
                    <option value="Segundo">Segundo-C</option> -->
                  
                </select>

            
            
            <button type ="submit">Enviar</button>
		
	



</body>
</html>

