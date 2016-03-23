<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contacto Domotech</title>
<link rel="stylesheet" type="text/css" href="{!!route('home')!!}/css/email.css" />
</head>
 
<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#999999">
   <tr>
      <td></td>
      <td class="header container" >
            
            <div class="content">
            <table bgcolor="#999999">
               <tr>
                  <td><img src="http://domotech.com/img/logo.png"  alt="Domotech" /></td>
                  <td align="right"><h6 class="collapse">Ingenieria Futura</h6></td>
               </tr>
            </table>
            </div>
            
      </td>
      <td></td>
   </tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
   <tr>
      <td></td>
      <td class="container" bgcolor="#FFFFFF">

         <div class="content">
         <table>
            <tr>
               <td>
                  <h3>Hola.</h3>
                  <p class="lead">Se ha Enviado un mensaje desde nuestro formulario de contacto</p>
                  <p>
                     Nombre Completo:{{$fullName}} </br>
                     Email:{{$email}}</br>
                     Telefono:{{$phone}}</br>
                  </p>
                  <!-- Callout Panel -->
                  <p class="callout">
                     Mensaje:</br>
                     {!!$mes!!}
                     
                  </p><!-- /Callout Panel -->               
                                    
                  <!-- social & contact -->
                  <table class="social" width="100%">
                     <tr>
                        <td>
                           
                           <!-- column 1 -->
                           <table align="left" class="column">
                              <tr>
                                 <td>           
                                    
                                    <h5 class="">Siguenos</h5>
                                    <p class=""><a href="https://www.facebook.com/domotechcolombia" class="soc-btn fb">Facebook</a> 
                                    </p>
                  
                                    
                                 </td>
                              </tr>
                           </table><!-- /column 1 --> 
                           
                           <!-- column 2 -->
                           <table align="left" class="column">
                              <tr>
                                 <td>           
                                                         
                                    <h5 class="">Contactanos</h5>                                   
                                    <p>Teléfono: <strong>408.341.0600</strong><br/>
                Email: <strong><a href="emailto:hseldon@trantor.com">DomotechPopayan@gmail.com</a></strong></p>
                
                                 </td>
                              </tr>
                           </table><!-- /column 2 -->
                           
                           <span class="clear"></span>   
                           
                        </td>
                     </tr>
                  </table><!-- /social & contact -->
                  
               </td>
            </tr>
         </table>
         </div><!-- /content -->
                           
      </td>
      <td></td>
   </tr>
</table><!-- /BODY -->

<!-- FOOTER -->

</body>
</html>