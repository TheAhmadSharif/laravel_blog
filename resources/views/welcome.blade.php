<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>:: Blog </title>
        <link rel="icon" href="{{ '../css/favicon.png' }}" type="image/x-icon"/>
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
        display: table;
    }
   
        </style>
    </head>
    <body>
         @include('header')
         <div class="container mh">
            <div class="row">
                     <div class="d-flex justify-content-between">
                         <div class="mtb col-lg-6">
                            <h1>Welcome to this blog.</h1>
                        </div>  <!-- End -->
                        <div class="alert alert-success mtb time-section col-lg-6">
                                <span class="far fa-clock" style="color: #fff; font-size: 24px;"></span> <span id="localtime">00:00:00 AM </span>
                                <span id="date">Wednesday, 13 November</span>
                        </div>  <!-- End Time Section -->
                    </div>  <!-- End -->
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
