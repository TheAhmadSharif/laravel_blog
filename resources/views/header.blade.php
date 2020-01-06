<header class="nav-header">
	<div class="container">
	<div class="row">


		<div class="col-md-4 col-sm-12">
			<div class="logo">
				<a href="{{ url('/') }}">
					<img src="{{ URL::asset('/images/logo.png') }}" width="50">
				</a>
			</div>  <!-- End Logo Block -->
		</div> <!-- End Div -->


	    <div class="col-md-8 col-sm-12">
	    	<div class="d-flex flex-row-reverse">
	    		<div class="nav-block">
	    			<ul class="nav">
	    				<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>

				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
				      	 <li class="nav-item"><a target="_blank" class="nav-link" href="{{ url('/api') }}">API</a></li>
				      	 <li class="nav-item"><a class="nav-link" href="{{ url('/article/list') }}">Articles</a></li>
				      	 <li>
				      	 	<form class="form-inline" method="get" action="{{ url('/search') }}" style="margin: 0">
							      <input id="search" name="search" class="form-control mr-sm-2" type="text" placeholder="Search">
								  <button class="btn btn-primary" type="submit">Search</button>
							</form>
				      	 </li>
				    </ul>
	    		</div> <!-- End Div -->
			</div>  <!-- End -->
	    </div> <!-- End col 12 -->

	</div>  <!-- End row -->
</div>   <!-- End Container -->
</header>
 <script type="text/javascript" src="{{ URL::asset('/js/jquery.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('/js/typesahead.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){

      $('#search').typeahead({
          hint: true,
          highlight: true,
          minLength: 1,
          source: ["one", "one hundred", "two", "three", "five", "six"]
      });

    });
</script> 