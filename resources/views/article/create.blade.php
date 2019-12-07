<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ '../css/app.css' }}">

        <title> New Article </title>
        <link rel="icon" href="{{ '../css/favicon.png' }}" type="image/x-icon"/>


        
    </head>
    <body>
         @include('header')
        <div class="container mh">
           <div class="row">
               <div class="col-lg-8">
                <div class="mtb">
                     <form method="post" action="{{ url('/form') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="title" placeholder="Title Text Please" value="{{ old('title') }}" class="form-control">

                        </div> <!-- End Form Group -->


                         <div class="form-group">
                            <input type="text" name="body" placeholder="Body Text Please" value="{{ old('body') }}" class="form-control">
                        </div> <!-- End Form Group -->
                        
                        


                        <button class="btn btn-primary">Submit</button>

                    </form>
                </div> <!-- End  -->
                    
                   
               </div> <!-- End -->
           </div>  <!-- Ebd -->

           <div class="row">
               <div class="col-lg-8">
                     @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    @endif

             </div> <!-- End -->
           </div>  <!-- Ebd -->
           

          

          

        </div>  <!-- End Container -->
        @include('footer');
    </body>
</html>
