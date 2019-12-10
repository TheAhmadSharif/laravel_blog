<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

        <title> OOPS! </title>


        <style type="text/css">
            span {
                font-size: 90px;
                color: #b1b1b1;
                text-align: center;
            }
            p {
                text-align: center;
                font-size: 26px;
                color: #3a3a3a;
            }
        </style>
    </head>
    <body>
         @include('header')
        <div class="container mh">
           <div class="d-flex justify-content-center mh">
                <div class="align-self-center">

                     <span>Oops! </span>
                     <div>
                         <p>You may lost your track.</p>
                     </div>
                </div>
           </div> <!-- End  -->

          

        </div>  <!-- End Container -->
        @include('footer');
    </body>
</html>
