 
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/sonrisa.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Formulario</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
     
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />	
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	  <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard.jpg')">
    
    
         <div class="logo-container">
             
             
        </div>
    

	

    
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

             
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="registrar_persona.php" method="POST">
                 

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>FORMULARIO</b>  <br>
                        	   
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#about" data-toggle="tab">Nombre</a></li>
	                            <li><a href="#account" data-toggle="tab">Telefono</a></li>
	                            <li><a href="#address" data-toggle="tab">Apellido</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                             
                            
                            
                              <div class="row ">
                                   
                                   
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Nombre: </label>
                                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="ingrese un nombre..." required>
                                      </div>
                                       
                                  </div>
                                 
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <label>Telefono: </label>
                                        <input name="telefono" id="telefono" type="number" class="form-control" placeholder="ingrese un telefono..." required>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Email: </label>
                                        <input name="email" type="email" class="form-control" placeholder="ingrese un correo..." required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                                <button type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish'>Guardar </button>
                                 

                            </div>

                            <div class="pull-left">
                                
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
                
            </div>  
            <br>
            <button type="button" class='btn btn-next btn-fill btn-primary btn-wd   ' data-toggle="modal" data-target="#exampleModal">Politicas </button>
        </div>
        </div> 
    </div>  

     
</div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <h3>Polticas</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus quidem corporis sint, dolore labore iusto expedita adipisci quaerat aperiam veniam eos est, quam repellat ut, similique ipsam. Esse, iste nesciunt?
                    Sequi, dignissimos! Perspiciatis, quasi consectetur illo voluptas libero soluta harum consequuntur nisi natus voluptatum est quia quibusdam? Asperiores omnis, esse officiis aspernatur est impedit exercitationem necessitatibus autem sint eum eius.
                    Ducimus exercitationem suscipit ipsam pariatur autem facere tempora ratione vitae nostrum. Fuga minus omnis, cupiditate nihil sunt quae tenetur quam odio nostrum eos tempore quo. Exercitationem ipsam quo omnis fugit.
                    Ipsam commodi excepturi harum illum delectus ad doloribus blanditiis nam consectetur vero, qui, repudiandae ratione sequi reprehenderit voluptatum sunt magnam! Odit, sunt explicabo. Fuga accusantium molestias illum tenetur nesciunt quo!
                    Quos, soluta. Iste unde, explicabo quibusdam in saepe autem tempora, doloremque facilis quas earum voluptatum debitis nam. Atque quibusdam impedit, vero explicabo deserunt consequatur voluptate eius, eligendi enim laudantium fugit.
                    Architecto odio consequatur non quod assumenda consequuntur rem vitae,  </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                     
                </div>
                </div>
            </div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                 
                     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                     
                </div>
                </div>
            </div>
            </div>







            <div id="barritaloca" style="display:none;position:fixed;left:0px;right:0px;top:0px;width:100%;min-height:40px;background: #767c73;color:#161716;z-index: 99999;">
                <div style="width:100%;position:absolute;padding-left:5px;font-family:verdana;font-size:12px;top:30%;">
                Usamos cookies propias y de terceros para mostrar publicidad personalizada seg&uacute;n su navegaci&oacute;n;. Si continua navegando consideramos que acepta el uso de cookies.
                <a href="javascript:void(0);" style="padding:4px;background:#bfd1b2;text-decoration:none;color:#fff;" onclick="PonerCookie();"><b>OK</b></a>
                <a href="http://www.google.com.ar/intl/es-419/policies/technologies/types/" target="_blank" style="padding-left:5px;text-decoration:none;color:#161df5;">M&aacute;s informaci&oacute;n</a>
                </div>
            </div>
           
            
            
            <script>
function getCookie(c_name){
var c_value = document.cookie;
var c_start = c_value.indexOf(" " + c_name + "=");
if (c_start == -1){
  c_start = c_value.indexOf(c_name + "=");
}
if (c_start == -1){
  c_value = null;
}else{
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1){
   c_end = c_value.length;
  }
  c_value = unescape(c_value.substring(c_start,c_end));
}
return c_value;
}
function setCookie(c_name,value,exdays){
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}
if(getCookie('aviso')!="1"){
document.getElementById("barritaloca").style.display="block";
}
function PonerCookie(){
setCookie('aviso','1',365);
document.getElementById("barritaloca").style.display="none";
}
</script>


</body>

 
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	 
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

 
	<script src="assets/js/jquery.validate.min.js"></script>
</html>
