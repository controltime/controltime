<div class="android-content mdl-layout__content">

<form method="POST" action="<?php echo base_url(); ?>index.php/personas/registrar">

<div class="mdl-grid">  
  <div class="mdl-tabs__panel is-active mdl-cell--8-col mdl-cell--6-col-tablet " id="datospersonales">
  	
<!-- ****************TARJETA DATOS PERSONALES****************-->
  	<div class="demo-card-square mdl-card mdl-shadow--2dp max-width-persona">
  	  <div class="mdl-card__title mdl-card--expand mdl-card--border titlered">
  	    <h2 class="mdl-card__title-text">Datos Personales</h2>
  	  </div>
  	  <div class="mdl-card__supporting-text">
  	  	
  	  	<div class="mdl-grid">
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="number" id="txt_doc" name="txt_doc">
  	  			    <label class="mdl-textfield__label" for="txt_doc">Numero documento *</label>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_nombres" name="txt_nombres">
  	  			    <label class="mdl-textfield__label" for="txt_nombres">Nombres *</label>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_apellidos" name="txt_apellidos">
  	  			    <label class="mdl-textfield__label" for="txt_apellidos">Apellidos *</label>
  	  			</div>
  	  		</div>
  	  		
  	  	</div>
  	  	<div class="mdl-grid">
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_telfijo" name="txt_telfijo" pattern="[0-9]*">
  	  			    <label class="mdl-textfield__label" for="txt_telfijo">Telefono fijo</label>
  	  			    <span class="mdl-textfield__error">Este es un campo numerico</span>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_cel" name="txt_cel" pattern="[0-9]*">
  	  			    <label class="mdl-textfield__label" for="txt_cel">Telefono Celular</label>
  	  			    <span class="mdl-textfield__error">Este es un campo numerico</span>
  	  			</div>
  	  		</div>
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_modalidad" name="txt_modalidad">
  	  			    <label class="mdl-textfield__label" for="txt_modalidad">Modalidad</label>
  	  			</div>
  	  		</div>
  	  	</div>
  	  	<div class="mdl-grid">
  	  		<div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_correo" name="txt_correo">
  	  			    <label class="mdl-textfield__label" for="txt_correo">Correo electronico *</label>
  	  			</div>
  	  		</div>

          <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
            <p>¿ Esta persona tiene acceso al sistema ?</p>
          </div> 
          <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switchpass" id="chkpass">
              <input type="checkbox" id="switchpass" class="mdl-switch__input" onclick="validacceso();">
              <span class="mdl-switch__label"></span>
            </label>
          </div>

  	  	</div>
	  	    
  	  </div>
  	  
  	</div>
<!-- ****************FIN TARJETA DATOS PERSONALES****************-->

<!-- ****************TARJETA CONTRASENA****************-->

  	<div class="demo-card-square mdl-card mdl-shadow--2dp max-width-persona" id="tarjetapass">
  	  <div class="mdl-card__title mdl-card--expand mdl-card--border titlered">
  	    <h2 class="mdl-card__title-text">Establesca una contraseña </h2>
  	  	<!--<div class="mdl-card__subtitle-text"> Diligencie esta opcion unicamente si la persona registrada va a tener acceso al sistema</div>-->
  	  </div>

  	  <div class="mdl-card__supporting-text">
  	  	
        <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet">
  	  			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  	  			    <input class="mdl-textfield__input" type="text" id="txt_pass" name="txt_pass" onkeyup="validapass();">
  	  			    <label class="mdl-textfield__label" for="txt_pass">Contraseña</label>
  	  			</div>
  	  		</div>
          <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="txt_pass2" id="txt_pass2"  onkeyup="validapass();">
                <label class="mdl-textfield__label" for="txt_pass2">Confirme su contraseña</label>
            </div>
          </div>


  	  	</div>  		    
  	  </div>

  	</div>

<!-- ****************FIN TARJETA CONTRASENA****************-->
</div>

<!-- ****************INICIO TARJETAS DE LA DERECHA****************-->
  <div class="mdl-cell--4-col mdl-cell--2-col-tablet" id="academia">
    <!-- ****************TARJETA ACADEMIA****************-->

        <div class="tarjeta-institucion mdl-card mdl-shadow--2dp max-width-persona" id="tarjetainfoaca">
          <div class="mdl-card__title  mdl-card--border ">

            <h2 class="mdl-card__title-text">Información Academica </h2>
            <!--<div class="mdl-card__subtitle-text"> Diligencie esta opcion unicamente si la persona registrada va a tener acceso al sistema</div>-->
          </div>

          <div class="mdl-card__supporting-text">
              <label class="">Asocie una institución a la que pertenece la persona</label>
              <select class="form-control" id="select-institucion" name="select-institucion">
                <option disabled selected>Seleccione una institucion</option>
              </select>
      
          </div>

        </div>
        <!-- ****************FIN TARJETA ACADEMIA****************-->

        <!-- ****************TARJETA EPS****************-->
        <div class="tarjeta-eps mdl-card mdl-shadow--2dp max-width-persona" id="tarjetainfoeps">
          <div class="mdl-card__title  mdl-card--border ">
            <h2 class="mdl-card__title-text">Información Eps </h2>
            <!--<div class="mdl-card__subtitle-text"> Diligencie esta opcion unicamente si la persona registrada va a tener acceso al sistema</div>-->
          </div>

          <div class="mdl-card__supporting-text">

              <label class="">Asocie una EPS para la persona</label>
              <select class="form-control" id="select-eps" name="select-eps">
                <option disabled selected>Seleccione una eps</option>
              </select>

       
          </div>

        </div>
        <!-- ****************FIN TARJETA EPS****************-->

        <!-- ****************TARJETA SUB AREA****************-->
        <div class="tarjeta-sarea mdl-card mdl-shadow--2dp max-width-persona" id="tarjetainfosubarea">
          <div class="mdl-card__title  mdl-card--border ">
            <h2 class="mdl-card__title-text">Información sub area </h2>

          </div>

          <div class="mdl-card__supporting-text">
 
            <label class="">Asocie una subarea para la persona</label>
            <select class="form-control" id="select-subarea" name="select-subarea">
              <option disabled selected>Seleccione</option>
              <option value="">Fruver</option>
              <option value="">Panaderia</option>
            </select>
         
          </div>

        </div>
        <!-- ****************FIN TARJETA SUB AREA****************-->
   </div>

</div>     <!-- ****************FIN DE TODAS LAS TARJETAS****************-->

<!-- Colored raised button -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored ba-btnpersona" id="btn_registrar" name="btn_registrar">
  Registrar una nueva persona
</button>
  
</form>

<script type="text/javascript" src="<?php echo base_url(); ?>tools/js/personas.js"></script>
