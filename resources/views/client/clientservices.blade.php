@extends('master_layouts.clienthome')

@section('title')
Services Offered
@endsection

@section('content')


<div style='position:absolute;z-index:-1;left:0;top:0;width:100%;height:100%'>
			<img src="{!! URL::asset('../images/petbg.jpg') !!}" style='width:100%;height:900px; opacity:0.8;' alt='[]' />
</div>
<!-- ===================== Home Content ================= -->
		<div class="container grey lighten-2" style="border-radius:15px;">
			<div class="orange lighten-2-text">
			<legend class="white-text"><h2>Services Offered</h2></legend>
				<div class="container-fluid white">
					<div class="row">
						<div class="col s6">
							<h3>Medical Services</h3>
								<div class="row">
									<div class="col s7 push-s1">
										<table class="highlight white">
											<thead>
												<tr>
													<th>Medical Service</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											
											<tbody>
												
                                               @foreach($medicalservices as $medicalservice)
                                                <tr>
													<td>{{$medicalservice->strMedicalService}}</td>
													<td>{{$medicalservice->strDescription}}</td>
													<td>{{$medicalservice->fltPrice}}</td>
												</tr>
												@endforeach
												
											</tbody>
										</table>
									</div>
								</div>
					
						</div>
						
						<div class="col s6">
							<h3>Grooming Services</h3>
								<div class="row">
									<div class="col s7 push-s1">
										<table class="highlight white">
											<thead>
												<tr>
													<th>Grooming Service</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											
											<tbody>
												
                                               @foreach($groomservices as $groomservice)
                                                <tr>
													<td>{{$groomservice->strGroomService}}</td>
													<td>{{$groomservice->strDescription}}</td>
													<td>{{$groomservice->fltPrice}}</td>
												</tr>
												@endforeach
												
											</tbody>
										</table>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
<!--				<div class="container-fluid" style="margin:3%">-->
				
				
<!--				</div>-->
		</div>

<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        
        <div class="col l3 s12">
          <h5 class="white-text">Pet Clinic</h5>
          <ul>
            <li class="white-text">Jason Andrew Paredes</li>
            <li class="white-text">Danisah Bryan Rosello</li>
			<li class="white-text">BSIT 3-1N</li>
          </ul>
        </div>
       
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright 
      </div>
    </div>
  </footer>
@stop