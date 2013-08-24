<html>
<head>

	<title></title>

	{{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('assets/bootstrap/css/bootstrap-responsive.css')}}
	{{HTML::style('assets/css/flat-ui.css')}}
	{{HTML::style('assets/datepicker/css/datepicker.css')}}
	{{HTML::style('assets/css/img.css')}}


</head>
<body style="background:#BBC1C4;padding-top:27px">

	<div class="row-fluid">
		<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					
						

							<div class="container">
								<div class="span2">

								</div>

								<div class="span8">
									<ul class="nav">
									<li><a href="{{URL('/')}}">Home</a></li>
									<li><a href="">Schedules</a></li>
									<li><a href="{{URL('Reservation')}}">Reservation</a></li>									
									<li><a href="">Blog</a></li>
									<li><a href="">About us</a></li>
									</ul>
								</div>

							
								
									<ul class="nav"><li>@if(Auth::check())
										<a  href="#">{{Auth::user()->First_Name}} {{Auth::user()->Last_Name}} </a>
									@endif</li></ul>
								

							
							</div>



					
				</div>
		</div>
		<br><br>
	</div>
	
	<div class="row-fluid">
		<div class="container-fluid">
			
			<div class="span3">
				<div class="well">
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Reservations
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
     
			  <ul class="nav nav-pills nav-stacked">
			  	<li><a href="">My Reserve Seats</a></li>
			  	<li><a href="">My Cancels</li>
			  </ul>
      
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        Anim pariatur cliche...
      </div>
    </div>
  </div>
</div>
				</div>
			</div>
					
			<div class="span9">
				<div class="well">

							@yield('content')
						
				</div>
			</div>

				
			
		</div>
	</div>

	<div class="row-fluid">
		<div class="navbar navbar-inverse navbar-fixed-bottom">

				
					<div class="navbar-inner">
							<div class="container">
						<ul class="nav">
							<li><a href="">&copy; Coded By Dev Tulio</a>
							</li>
						</ul>
							</div>
					</div>	

		</div>

	</div>
</div>

{{HTML::script('assets/js/jquery.js')}}
{{HTML::script('assets/datepicker/js/datepicker.js')}}
{{HTML::script('assets/datepicker/js/date.js')}}
{{HTML::script('assets/js/bootstrap.min.js')}}

</body>
</html>