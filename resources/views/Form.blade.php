@extends('layout')

	@section('header')
		Servicio Social del CIBM
	@stop

	@section('PageTitle')
		Registro del Servicio Social Profesional
	@stop

	@section('InitialMessage')
		Forma para obtención de la información del servicio social profesional de los socios del Colegio de Ingenieros Biomédicos de México.
	@stop

	@section('SectionHeading')
		Información Personal
	@stop

	@section('FormContent')
		<div id="app">
			<form name=myForm" method="POST" action="/FormInfo" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 				<div class="form-group">
    				<label class="control-label col-sm-2" for="Nombre">Nombre:</label>
    				<div class="col-sm-10">
      					<input name="Nombre" class="form-control" id="Nombre" placeholder="Escriba su nombre">
    				</div>
  				</div> 

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="ApPat">Apellido Paterno:</label>
    				<div class="col-sm-10">
      					<input name="ApPat" class="form-control" id="ApPat" placeholder="Escriba su apellido paterno">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="ApMat">Apellido Materno:</label>
    				<div class="col-sm-10">
      					<input name="ApMat" class="form-control" id="ApMat" placeholder="Escriba su apellido materno">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="FechaNacimiento">Fecha de nacimiento:</label>
    				<div class="col-sm-10">
      					{{-- <input name="FechaNacimiento" class="form-control" id="FechaNacimiento" placeholder="DD/MM/AAAA"> --}}
      					<input name="FechaNacimiento" class="form-control" placeholder="DD/MM/AAAA" type="text" id="datepicker"></p>
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="Genero">Género:</label>
    				<div class="col-sm-10">
      					<input name="Genero" class="form-control" id="Genero" placeholder="Masculino/Femenino">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="Nacionalidad">Nacionalidad:</label>
    				<div class="col-sm-10">
      					<input name="Nacionalidad" class="form-control" id="Nacionalidad" placeholder="Escriba su nacionalidad">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="CP">Código Postal:</label>
    				<div class="col-sm-10">
      					<input name="CP" class="form-control" id="CP" placeholder="XXXXX">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="Institucion">Institución donde labora:</label>
    				<div class="col-sm-10">
      					<input name="Institucion" class="form-control" id="Institucion" placeholder="Escriba el nombre completo de la Institución en donde labora">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="Cargo">Cargo:</label>
    				<div class="col-sm-10">
      					<input name="Cargo" class="form-control" id="Cargo" placeholder="Cargo que desempeña en dicha institución">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="Cel">Teléfono celular:</label>
    				<div class="col-sm-10">
      					<input name="Cel" class="form-control" id="Cel" placeholder="(+52)-55-XXXX-XXXX">
    				</div>
  				</div>

  				<div class="form-group">
    				<label class="control-label col-sm-2" for="Email">Correo electrónico:</label>
    				<div class="col-sm-10">
      					<input name="Email" class="form-control" id="Email" placeholder="juan@lopez.com">
    				</div>
  				</div>

  				<h1>Información relevante para el Servicio Social Profesional</h1>

  				<p>Seleccione las opciones que apliquen</p>

  				<div class="panel panel-default">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" name="SS1" onclick="showMe('div1','div0')">Actualmente me encuentro laborando en el sector público</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" name="SS2" onclick="showMe('div1','div0')">Tengo 60 años o más</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" name="SS3" onclick="showMe('div1','div0')">Tengo una incapacidad por enfermedad</label>
							</div>
						</li>
					</ul>
				</div>

				<div style="display: none;" id="div0">
						<p>De acuerdo a los estatutos establecidos por la Secretaría de Educación Pública no es necesario que realice Servicio Social Profesional. Le agradecemos el envío de la información personal para su actualización.</p>
				</div>

				<div style="display: block;" id="div1">
    				<h1>Servicio Social Profesional</h1>
   					<p> Seleccione de las siguientes opciones el servicio social profesional que haya realizado:</p>

						<div class="panel panel-default">
								<ul class="list-group">
									<li class="list-group-item">
										<div class="checkbox">
											<label><input type="checkbox" name="Opcion1"> Investigaciones y/o publicación de artículos de interés científico</label>
										</div>
									</li>
									<li class="list-group-item">
										<div class="checkbox">
											<label><input type="checkbox" name="Opcion2">  Actividades de educación continua</label>
										</div>
									</li>
									<li class="list-group-item">
										<div class="checkbox">
											<label><input type="checkbox" name="Opcion3"> Asesorías o consultas</label>
										</div>
									</li>
									<li class="list-group-item">
										<div class="checkbox">
											<label><input type="checkbox" name="Opcion4">  Capacitación para formación de recursos humanos</label>
										</div>
									</li>
									<li class="list-group-item">
										<div class="checkbox">
											<label><input type="checkbox" name="Opcion5"> Actividades de asesoramiento, orientación y elaboración de dictámenes con las instancias gubernamentales que regulan el ejercicio profesional</label>
										</div>
									</li>
								</ul>
						</div>

						<p>Introduzca los datos de la Institución beneficiada o de las personas con el servicio social</p>

						<div class="form-group">
			    			<label class="control-label col-sm-2" for="NomInst">Institución/Beneficiado:</label>
			    			<div class="col-sm-10">
			      				<input name="NomInst" class="form-control" id="NomInst" placeholder="Escriba el nombre de la institución o persona beneficiada">
			    			</div>
			  			</div>

			  			<div class="form-group">
			    			<label class="control-label col-sm-2" for="Lugar">Lugar:</label>
			    			<div class="col-sm-10">
			      				<input name="Lugar" class="form-control" id="Lugar" placeholder="Lugar en el que se realizó el servicio social">
			    			</div>
			  			</div>

			  			<div class="form-group">
			    			<label class="control-label col-sm-2" for="TelInst">Teléfono:</label>
			    			<div class="col-sm-10">
			      				<input name="TelInst" class="form-control" id="TelInst" placeholder="Teléfono de la Institución o grupo">
			    			</div>
			  			</div>

			  			<div class="form-group">
			    			<label class="control-label col-sm-2" for="Actividad">Actividad realizada:</label>
			    			<div class="col-sm-10">
			      				<input name="Actividad" class="form-control" id="Actividad" placeholder="Actividad que realizó como servicio social">
			    			</div>
			  			</div>

			  			<div class="form-group">
			    			<label class="control-label col-sm-2" for="Beneficio">Beneficio otorgado:</label>
			    			<div class="col-sm-10">
			      				<input name="Beneficio" class="form-control" id="Beneficio" placeholder="Número de personas capacitadas, número de articulos o publicaciones, número de asesorias, consultorias, dictamenes o impacto logrado">
			    			</div>
			  			</div>

			  			<div class="form-group">
			    			<label class="control-label col-sm-2" for="InicioSS">Fecha inicio:</label>
			    			<div class="col-sm-10">
			      				<input name="InicioSS" class="form-control" id="InicioSS" placeholder="Fecha de inicio del servicio social profesional">
			    			</div>
			  			</div>

			  			<div class="form-group">
			    			<label class="control-label col-sm-2" for="FinSS">Fecha fin:</label>
			    			<div class="col-sm-10">
			      				<input name="FinSS" class="form-control" id="FinSS" placeholder="Fecha de fin del servicio social profesional">
			    			</div>
			  			</div>
  				</div>

      			<div class="form-group">
      				<div class="col-sm-offset-10 col-sm-10" style="padding:15px">
      					<button type="submit" class="btn btn-primary" onclick="MyFunction()">Mandar respuestas</button>
      				</div>
      			</div>

      		</form>
		</div>

		{{-- JQUERY Date picker --}}
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<script>
		function showMe (box,box1) {
        
	        var chboxs1 = document.getElementsByName("SS1");
	        var chboxs2 = document.getElementsByName("SS2");
	        var chboxs3 = document.getElementsByName("SS3");
	        var vis = "block";
	        var vis1 = "none";
	        for(var i=0;i<chboxs1.length;i++) { 
	            if(chboxs1[i].checked || chboxs2[i].checked || chboxs3[i].checked){
            		vis = "none";
            		vis1 = "block";
                break;
            	}
        	}
        document.getElementById(box).style.display = vis;
        document.getElementById(box1).style.display = vis1;
    	}

    	$( function() {
    		$( "#datepicker" ).datepicker();
    		$( "#InicioSS" ).datepicker();
    		$( "#FinSS" ).datepicker();
  		} );

    	</script>

{{--       		     <button onclick="MyFunction()">Mandar respuestas</button>
      			<div>
      				<p id="demo">Hola</p>
      			</div>

      	<script>
			function MyFunction(){
				var txt = "";
				var inpObj = document.getElementById("Nombre");
				if (inpObj == null || inpObj == ""){
					txt = "No name";
				}
				document.getElementById("demo").innerHTML = document.getElementById("Nombre").value;;
			}
		</script> --}}


    @stop