<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> New Article </title>


        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

        
        
    </head>
    <body>
         @include('header')
        <div class="container mh">
           <div class="row">
               <div class="col-md-8 col-sm-12">
                <div class="mtb">
                    <div class="jumbotron">
                            <div>
                                <h4>New Article </h4>
                            </div>
                             <form method="post" action="{{ url('/article/store') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="text" name="title" placeholder="Title Text Please" value="{{ old('title') }}" class="form-control">
                                </div> <!-- End Form Group -->

                                 <div class="form-group">
                                    <textarea name="body" placeholder="Body Text Please" class="form-control">{{ old('body') }}</textarea>
                                </div> <!-- End Form Group -->
                                <button class="btn btn-primary">Submit</button>

                            </form>

                            <div class="">
                                     @if ($errors->any())
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                    @endif

                           </div>  <!-- End -->


                     </div> <!-- End alert -->
                </div> <!-- End  -->
                    
                   
               </div> <!-- End -->
           </div>  <!-- Ebd -->


        </div>  <!-- End Container -->
        @include('footer');
    </body>
</html>
