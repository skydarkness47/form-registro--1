<!DOCTYPE html>
<html>
<head>
<title>FORMULARIO DE REGISTRO JONATHAN AGUIRRE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv28/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="fdw-demo.css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   
</head>
<body>
 <div class="container">
      <div class="freshdesignweb-top"><h1><a href="https://github.com/skydarkness47/form-registro--1">PRIMER PROYECTO UTN</a></h1></div><div class="clr"></div>
			<header>
				<h1><span></span><strong> FORMULARIO DE REGISTRO JONATHAN AGUIRRE</strong></h1>
            </header>       
      <div  class="form">
    		<form id="contactform"> 
    			<p class="contact"><label for="name">NOMBRE</label></p> 
    			<input id="name" name="name" placeholder="Ingrese su nombre" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">CORREO ELECTRONICO</label></p> 
    			<input id="email" name="email" placeholder="ejemplo@domain.com" required="" type="email"> 

    		
                 <p class="contact"><label for="username"></label></p> 
          <input id="username" name="username" placeholder="PAGINA WEB" required="" tabindex="2" type="url"> 
        
                <p class="contact"><label for="password">INGRESE UNA CONTRASEÑA</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">REINGRESE LA CONTRASEÑA</label></p> 
    			<input type="password" id="repassword" name="repassword" required="">

          <script type="text/javascript">
            
              function comparar(){
                if(document.form.password.value == document.form.repassword.value)
                {
                  document.form.submit();

                }

                
              }
              var x1 =document.form.password.value;
             
              var x2= document.form.repassword.value;

            


          </script>
         
        
                         <fieldset>
                 <label>CUMPLEAÑOS</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value=""> MES</option>
                  <option  value="01">ENERO</option>
                  <option value="02">FEBRERO</option>
                  <option value="03" >MARZO</option>
                  <option value="04">ABRIL</option>
                  <option value="05">MAYO</option>
                  <option value="06">JUNIO</option>
                  <option value="07">JULIO</option>
                  <option value="08">AGOSTO</option>
                  <option value="09">SEPTIEMBRE</option>
                  <option value="10">OCTUBRE</option>
                  <option value="11">NOBIEMBRE</option>
                  <option value="12" >DICIEMBRE</option>
                  </label>
                 </select>    
                <label>DIA<input class="birthday" maxlength="2" name="BirthDay"  placeholder="DIA" required=""></label>
                <label>AÑO<input class="birthyear" maxlength="4" name="BirthYear" placeholder="AÑO" required=""></label>
              </fieldset>
              <br>
                 <fieldset>
                 <label>SELECCIONE UN SEXO SEXO</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">SEXO</option>
                  <option  value="01">HOMBRE</option>
                  <option value="02">MUJER</option>
 
                  </label>
                 </select>   
              </fieldset>
          <fieldset>
                <br> <input type="radio" name = "lenguajep" value="PROGRAMACION 3" checked="">PROGRAMACION 3<br>
                 <br> <input type="radio" name = "lenguajep" yvalue="PROGRAMACION 3" checked="">LABORATORIO 3<br>
                <br>
                 <label>SELECCIONE UNA FOTO</label> 
                 <br><br><input type="file" name="foto" ></input>
                 
               </fieldset>
             
              <br>
             <br>
            <p class="contact"><label for="phone">TELEFONO</label></p> 
            <input id="phone" name="phone" placeholder="NUMERO DE TELEFONO" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="REGISTRO" type="submit" onclick="comparar(x1,x2)"> 	&nbsp; &nbsp;&nbsp;&nbsp; <input class="buttom" name="reset" id ="reset" tabindex="5" type="reset"></input>

   </form> 
  </div>       
</div>
         
            
</body>
</html>
