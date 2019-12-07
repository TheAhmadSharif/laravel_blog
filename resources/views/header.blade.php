<header class="nav-header">
	<div class="container">
	<div class="row">
	    <div class="col-lg-12">
	    	<div class="d-flex justify-content-between">

	    		<div>
	    			<a href="{{ url('/') }}">
	    				<img src="{{ URL::asset('/css/logo.png') }}" width="40">
	    			</a>
	    		</div> <!-- End Div -->

	    		<div>
	    		
	    			<ul class="nav">
				    	 <li></li>
				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/api') }}">API</a></li>
				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/article/list') }}">Articles</a></li>
				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
				      	 <li>
				      	 	<form class="form-inline">
							      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								  <button class="btn btn-primary" type="submit">Search</button>
							</form>
				      	 </li>
				    </ul>
				

				     
	    		</div> <!-- End Div -->
			    
			   
			</div>  <!-- End -->
	    </div> <!-- End s12 -->

	</div>  <!-- End row -->
</div>   <!-- End Container -->
</header>