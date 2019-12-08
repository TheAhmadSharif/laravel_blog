<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Articles</title>

        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
        
    </head>
    <body>
         
              @include('header')
        <div class="container mh">
              <div class="row">
                <div class="col sm-12 col-md-8">
                    <div class="mtb">
                        <div>
                            <h2>{{ $Article->title }}</h2>

                            <span>

                            <?php
                                 $newDate = new DateTime($Article->created_at);
                                 echo $newDate->format('M d, Y, h:i:s a');
                            ?>
                            </span>
                        </div>


                        <div>
                            {{ $Article->body }}
                        </div>
                            


                    </div>   <!-- End -->
                 </div> <!-- End s12 -->
             </div>  <!-- End row -->
            

                
        </div>  <!-- End container -->

        @include('footer');
    </body>
</html>
