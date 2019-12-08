<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>:: About Me </title>
        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

        <style type="text/css">
        	body {
        		transition: width 0.8s; 
        		-webkit-transition: width 0.8s; 
        		-moz-transition: width 0.8s; 
				-ms-transition: padding 0.5s; 
        	}
        	.tag {
        		padding: 0;
        		padding-left: 10px;
        	}
        	.tag li {
        		list-style: disc;
        		padding-left: 0;
        	}
        </style>
    </head>
    <body>
         @include('header')
         <div class="container mh">
            <div class="row">
                     <div class="d-flex justify-content-between">
                         <div class="mtb col-lg-6">
                            <h2 style="font-size: 26px;">About Me</h2>

                            <article>
								<p>
									I am from Sylhet, and I accomplished my bachelor's degree in Statistics from <a href="http://www.sust.edu" target="_blank" class="link">Shahjalal university of science &amp; technology</a> in 2013. 
								</p>

								<p> I have been crafting web application since 2013. I worked with server side programming languages (NodeJS, PHP), databases (mysql, mongoDB) rest API and other contemporary tools &amp; technologies. Take a look my <span><a class="link" href="https://github.com/TheAhmadSharif">github</a></span> &amp; <a class="link" href="https://stackoverflow.com/users/1324366/" target="_blank">
stackoverflow</a> profile, to learn about my skills and working domains.
								</p>

								<ul class="tag">
									<li> HTML5-CSS3, ES6, Angular, React, D3JS </li>
									<li> Nodejs-Mongodb, PHP-MySQL, Laravel</li>
								</ul>
							
							</article>
                        </div>  <!-- End -->
                    </div>  <!-- End -->
            </div> <!-- End row -->
          
                



         </div>  <!-- End Container -->    
         @include('footer')    
    </body>
</html>
