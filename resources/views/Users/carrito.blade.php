@extends('layout.main')
@section('link')
<link rel="stylesheet" href="css/style.css" />
	@endsection
@section('title')Mi Carrito @endsection
@section('content')

<body style=>
	<!-- Header -->

	<!--!ACA EMPIEZA CARRITO.//-->
	<section class="section-pagetop bg">
		<div class="">
			<h1 class="mx-5 mr-3 text-uppercase font-weight-bold" style="padding:2%" >Mi Carrito</h2>
		</div>

		<!-- container //  -->
	</section>

	<div class="mx-5">
		<section class="section-content padding-y">
			<div class="">
				<div class="row">

					<!-- col.// -->
					<main class="col-md-9">
						<div class="tab-content"></div>

						<div class="tab-pane" id="guardados" role="tabpanel">
							<article class="card mb-3">
								<div class="card-body" style="background-color: rgb(108, 117, 125);">
									<div class="card" style="background-color:rgba(255, 255, 255, 0.582); color:black;">
										<table class="table table-borderless table-shopping-cart ">
											<thead class="text-muted">
												<tr class="small text-uppercase">
													<th scope="col">Producto</th>
													<th scope="col" width="120">Cantidad</th>
													<th scope="col" width="120">Precio</th>
													<th scope="col" class="text-right" width="200"> </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>




												</tr>
											</tbody>
										</table>
										<div class="card-body border-top">

                                            <a href="/" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Seguir comprando </a>
                                            <a href="#" class="btn btn-primary float-md-right"> Comprar <i class="fa fa-chevron-right"></i> </a>
										</div>
									</div> <!-- card.// -->
									<div class="alert alert-success mt-3">
										<p class="icontext"><i class="icon text-success fa fa-truck"></i> Envios gratis entre 1-2 semanas</p>
									</div>
								</div>
							</article>

						</div>



						<!-- card.// -->
					</main>
					<aside class="col-md-3">
						<div class="card mb-3">
                            <div style="background-color: rgb(108, 117, 125);" class="card-body" >
								<form  >
									<div class="form-group"style="padding:5%; background-color:rgba(255, 255, 255, 0.582);">
										<label>Tenes un Codigo de Descuento?</label>
										<div class="input-group">
											<input type="text" class="form-control" name="" placeholder="Codigo">
											<span class="input-group-append">
												<button class="btn btn-primary">Enviar</button>
											</span>
										</div>
									</div>
								</form>
							</div> <!-- card-body.// -->
						</div> <!-- card .// -->
						{{-- <div class="card" style="padding:5%;background-color: rgb(108, 117, 125);">
							<div class="card-body" style=" background-color:rgba(255, 255, 255, 0.582);">
								<dl class="dlist-align">
									<dt>Precio Total:</dt>
									<dd class="text-right">$ 568</dd>
								</dl>
								<dl class="dlist-align">
									<dt>Descuento:</dt>
									<dd class="text-right">$ 658</dd>
								</dl>
								<dl class="dlist-align">
									<dt>Total:</dt>
									<dd class="text-right  h5"><strong>$1,650</strong></dd>
								</dl>
								<hr>
								<p class="text-center mb-3">

								</p> --}}

							</div> <!-- card-body.// -->
						</div> <!-- card .// -->

				</div>
				</aside>
				<!-- col.// -->
			</div>

			<!-- container .//  -->
		</section>

		<!--!ACA TERMINA MI CARRITO.//-->

		<br /><br /><br />

	</div> <!-- aca cierra mx-5 -->




	</div>
	</div>

</body>
@endsection
