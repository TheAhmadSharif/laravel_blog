<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>:: Search </title>
        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

    </head>
    <body>
         @include('header')
         <div class="container mh">

            <div class="row">
                 @foreach ($Articles as $Article)
                    <div class="col-md-12">
                        <div class="article-heading hr" style="min-height: auto;">
                            <h4><a href="{{ url('article/list/'.$Article->id) }}">

                                 {{ $Article->title  }} 

                            </a></h4>
                        </div> <!-- End -->
                        <div class="article-content" style="height: auto;">

                             <span class="article-date">

                                    <?php
                                         $newDate = new DateTime($Article->created_at);
                                         echo $newDate->format('M d, Y, h:i:s a');
                                    ?>
                            </span>

                        </div> <!-- End -->

                        <div class="read-more" style="margin: 0;">
                            <a href="{{ url('article/list/'.$Article->id) }}" class="badge badge-primary">Read more</a>
                        </div> <!-- End -->
                    </div> <!-- End Col -->
                @endforeach
            </div> <!-- End row -->

            <div class="row mt">
                    <?php echo $Articles->links(); ?>
             </div> <!-- End row -->


         </div>  <!-- End Container -->    
         @include('footer')   

    </body>
</html>
