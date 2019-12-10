<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>:: Blog </title>
        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ 'css/app.css' }}">

        <style type="text/css">

        .container {
            position: relative;
            z-index: 12;
            top: 0;
            left: 0;
        }
    #localtime {
        font-size: 26px;
        line-height: 30px;
        width: auto;
    }   

    .time-section {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        color: #202020;
        background-color: #f7f7f7;
        border-color: #b8b8b8;
    }

    h4 a {
        color: #333;
    }

    .hr {
        padding: 10px 0;
        border-bottom: 1px solid #333;
    }
    .article-heading {
        height: 75px;
    }
    .article-content {
        padding: 10px 0;
        height: 120px;
        max-height: 120px;
        overflow: hidden;
    }
    .read-more {
        margin: 20px 0;
    }
    .article-date {
        display: block;
        font-size: 12px;
        color: #666;
    }
   
        </style>
    </head>
    <body>
         @include('header')
         <div class="container mh">
            <div class="row">
                         <div class="mtb col-md-8">
                            <h1>Welcome to this web portal.</h1>
                        </div>  <!-- End -->
                        <div class="mtb time-section col-md-4">
                                <span class="far fa-clock" style="color: #fff; font-size: 24px;"></span> <span id="localtime">00:00:00 AM </span>
                                <span id="date">Wednesday, 13 November</span>
                        </div>  <!-- End Time Section -->
            </div> <!-- End row -->

            <div class="row">
                 @foreach ($Articles as $Article)
                    <div class="col-md-4">
                        <div class="article-heading hr">
                            <h4><a href="{{ url('article/list/'.$Article->id) }}">

                                 {{ substr($Article->title, 0, 60) }} ...

                            </a></h4>
                        </div> <!-- End -->
                        <div class="article-content">

                             <span class="article-date">

                                    <?php
                                         $newDate = new DateTime($Article->created_at);
                                         echo $newDate->format('M d, Y, h:i:s a');
                                    ?>
                            </span>
                            {{ substr($Article->body, 0, 160) }} ...

                        </div> <!-- End -->

                        <div class="read-more">
                            <a href="{{ url('article/list/'.$Article->id) }}" class="badge badge-primary">Read more</a>
                        </div> <!-- End -->
                    </div> <!-- End Col -->
                @endforeach
                
            </div> <!-- End row -->
          
                
                <script type="text/javascript">
                           var weekday = new Array(7);
                                weekday[0] = "Sunday";
                                weekday[1] = "Monday";
                                weekday[2] = "Tuesday";
                                weekday[3] = "Wednesday";
                                weekday[4] = "Thursday";
                                weekday[5] = "Friday";
                                weekday[6] = "Saturday";

                        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                        var d = new Date();
                        var month = months[d.getMonth()];
                        var getDate = d.getDate();
                        var n = weekday[d.getDay()];

                        document.getElementById("date").innerHTML = n + ', ' + getDate + ' ' + month;
                    
                    

                    var myVar = setInterval(myTimer, 1000);

                        function myTimer() {
                          var timeSpan = new Date();
                          document.getElementById("localtime").innerHTML = '00:00:00';
                          document.getElementById("localtime").innerHTML = timeSpan.toLocaleTimeString();
                        }
                </script>
         </div>  <!-- End Container -->    
         @include('footer')    
    </body>
</html>
