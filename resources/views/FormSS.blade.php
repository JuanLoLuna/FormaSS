@extends('layout')

	@section('header')
		Servicio Social del CIBM
	@stop

	@section('PageTitle')
		Información de Servicio Social
	@stop

	@section('InitialMessage')
		Forma para obtención de la información del servicio social de los socios del Colegio de Ingenieros Biomédicos de México.
	@stop

	@section('SectionHeading')
		Servicio Social Profesional
	@stop

	@section('FormContent')
		<p> Seleccione de las siguientes opciones el servicio social profesional que haya realizado:</p>

	<div id="app">
		<form name=myForm" class="form-horizontal">

			<div class="panel panel-default">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" value="SS1"> Investigaciones y/o publicación de artículos de interés científico</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" value="SS2">  Actividades de educación continua</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" value="SS3"> Asesorías o consultas</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" value="SS4">  Capacitación para formación de recursos humanos</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="checkbox">
								<label><input type="checkbox" value="SS5"> Actividades de asesoramiento, orientación y elaboración de dictámenes con las instancias gubernamentales que regulan el ejercicio profesional</label>
							</div>
						</li>
					</ul>
			</div>

			<p>Introduzca los datos de la Institución beneficiada o de las personas con el servicio social</p>

			<div class="form-group">
    			<label class="control-label col-sm-2" for="NomInst">Nombre de la Institución/Persona beneficiada:</label>
    			<div class="col-sm-10">
      				<input type="NomInst" class="form-control" id="NomInst" placeholder="Escriba el nombre de la Institución o persona beneficiada">
    			</div>
  			</div>

  			<div class="form-group">
    			<label class="control-label col-sm-2" for="Lugar">Lugar:</label>
    			<div class="col-sm-10">
      				<input type="Lugar" class="form-control" id="Lugar" placeholder="Lugar en el que se realizó el servicio social">
    			</div>
  			</div>

  			<div class="form-group">
    			<label class="control-label col-sm-2" for="TelInst">Teléfono:</label>
    			<div class="col-sm-10">
      				<input type="TelInst" class="form-control" id="TelInst" placeholder="Teléfono de la Institución o grupo">
    			</div>
  			</div>

  			<div class="form-group">
    			<label class="control-label col-sm-2" for="Actividad">Actividad realizada:</label>
    			<div class="col-sm-10">
      				<input type="Actividad" class="form-control" id="Actividad" placeholder="Actividad que realizó como servicio social">
    			</div>
  			</div>

  			<div class="form-group">
    			<label class="control-label col-sm-2" for="Beneficio">Beneficio otorgado:</label>
    			<div class="col-sm-10">
      				<input type="Beneficio" class="form-control" id="Beneficio" placeholder="Número de personas capacitadas, número de articulos o publicaciones, número de asesorias, consultorias, dictamenes o impacto logrado">
    			</div>
  			</div>

  			<div class="form-group">
    			<label class="control-label col-sm-2" for="PeriodoSS">Fecha o periodo:</label>
    			<div class="col-sm-10">
      				<input type="PeriodoSS" class="form-control" id="PeriodoSS" placeholder="Fecha o periodo de realización del servicio social">
    			</div>
  			</div>

  			<div class="form-group">
      			<div class="col-sm-offset-10 col-sm-10" style="padding:15px">
      				<button type="submit" class="btn btn-success" onclick="MyFunction()">Mandar respuestas</button>
      			</div>
      		</div>

		</form>


	@stop