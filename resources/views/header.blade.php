<header class="nav-header">
	<div class="container">
	<div class="row">
	    <div class="col-lg-12">
	    	<div class="d-flex justify-content-between">

	    		<div>
	    			<a href="{{ url('/') }}">
	    				<img src="{{ URL::asset('/css/logo.png') }}" width="50">
	    			</a>
	    		</div> <!-- End Div -->

	    		<div class="nav-block">
	    		
	    			<ul class="nav">
	    				<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>

				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
				      	 <li class="nav-item"><a target="_blank" class="nav-link" href="{{ url('/api') }}">API</a></li>
				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/article/list') }}">Articles</a></li>
				      	 <li>
				      	 	<form class="form-inline" method="get" action="{{ url('/search/query') }}" style="margin: 0">
							      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
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