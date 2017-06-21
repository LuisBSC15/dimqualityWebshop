<div class='container'>
    <div class="row">
      <div class="col-md-12">
          <h1>Comprar Productos</h1>
      </div>
    </div>
    <div class="row">
      <div class="container form-group">
        <form action="<?php echo base_url('usuario/comprarProducto') ?>" method="POST">
          <div class="container">
            <h4>Carrito de Compras</h4>
            <div class="col-md-10 col-md-offset-1 well">
				<div class="row">
					<div class="col-md-2">
						<img class="img-responsive" src="https://s3.amazonaws.com/poderpda/2016/09/Xperia-XZ_forestBlue.png" WIDTH=320 HEIGHT=240>
					</div>
					<div class="col-md-5">
						<h5>Xperia XZ</h5>
						<p>
							El Xperia XZ trae una cámara trasera de 23 megapixeles con una apertura de f/2.0, láser de enfoque automático, flash y un nuevo sensor RGBC que promete colores más naturales y a obtener mejores resultados en situaciones con poca luz.
						</p>
						<a href="url"> Mas informacion..</a>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								Precio
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								$ 600
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								Cantidad
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="number" step="1" value="1">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								Quitar
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button class="eliminar"><i class="material-icons">delete</i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
          

	  <div class="col-md-10 col-md-offset-1 well">
				<div class="row">
					<div class="col-md-2">
						<img class="img-responsive" src="http://www.lg.com/es/images/gnb-global/es_gnb_he_003.png" WIDTH=320 HEIGHT=240>
					</div>
					<div class="col-md-5">
						<h5>LG OLED 4K (65pulg)</h5>
						<p>
							MÁS NEGRO: Debido a la ausencia de retroiluminación obtendrás el único negro puro imposible de conseguir en otras tecnologíasMÁS COLOR: No hay colores como los de OLED. Tiene el 100% de espacio DCI-P3MÁS RÁPIDO: Es 1000 veces más rápido generando imágenesMÁS HDR, HDRx5: El único compatible con 100% HDR (Dolby Vision, HDR10, HLG, Technicolor, HDR Converter)MÁS ENVOLVENTE: El único TV con sonido Dolby Atmos . El sonido se mueve 360º alrededor de tiMÁS SEGURO: Tiene el Smart TV más fácil, rápido y seguro. WebOS 3.5.
						</p>
						<a href="url"> Mas informacion..</a>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								Precio
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								$ 7794
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								Cantidad
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="number" step="1" value="1">
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row">
							<div class="col-md-12">
								Quitar
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button class="eliminar"><i class="material-icons">delete</i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
          </div>
	  <div class="col-md-6">
				<div class="row">
					<h4>Datos de la entrega</h4>
					<div class="col-md-6">
						<div class="row">
								<input type="radio" name="entrega" value="retiro" checked="checked">Retiro en Local
						</div>
						<div class="row">
								<input type="radio" name="entrega" value=domicilio">Entrega a Domicilio
						</div>
					</div>
				</div>
				
          </div>
	  <div class="col-md-6">
				<div class="row">
					<h4>Forma de Pago</h4>
					<div class="col-md-6">
						<div class="row">
								<input type="radio" name="pago" value="Deposito" checked="checked">Deposito 
						</div>
						<div class="row">
								<input type="radio" name="pago" value="Transferencia">Transferencia
						</div>
					</div>
				</div>
				
          </div>

	  	
		<p>
			Posterior a la compra, nos pondremos en contacto con usted para concretar la transacción. Deberá enviar pruebas (foto o captura de pantalla del comprobante) que respalden el pago realizado para efectuar la compra.
		</p>
				
          	  
	  
          <div class="form-group">
            <input class="btn btn-primary" name="submit" type="submit" value="Proceder"/>
          </div>	
        </form>
      </div>

  </div>
</div>
<script type="text/javascript" src="<?php echo base_url("public/js/jQuery-3.2.1.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.js"); ?>"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
