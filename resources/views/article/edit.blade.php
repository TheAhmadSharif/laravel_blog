<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Edit Article </title>


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
                                <h4>Edit Article </h4>
                            </div>
                             <form method="post" action="{{ url('/article/update/'.$Article->id) }}">
                                @csrf
                                @method('PUT')


                                <div class="form-group">
                                    <input type="text" name="title" placeholder="Title Text Please" value="{{ $Article->title }}" class="form-control">
                                </div> <!-- End Form Group -->

                                 <div class="form-group">
                                    
                                    <textarea name="body" placeholder="Body Text Please" class="form-control">{{ $Article->body }}</textarea>
                                </div> <!-- End Form Group -->
                                <button class="btn btn-primary">Submit</button>

                            </form>
                     </div> <!-- End alert -->
                    
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
