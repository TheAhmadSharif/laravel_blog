<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Articles</title>

        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

        <style type="text/css">
            td a {
                color: #333;
            }
        </style>
        
    </head>
    <body>
         
              @include('header')
        <div class="container mh">
              <div class="row">
                <div class="col s12">
                    <div class="mtb">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <a class="btn btn-outline-primary mb btn-sm" href="{{ url('article/create') }}">+ Add New</a>
                            <table class="table">
                                <tr>
                                    <td>ID</td>
                                    <td>Title</td>
                                    <td>Action</td>
                                </tr>
                                
                                @foreach ($Articles as $Article)
                                    <tr>
                                    
                                        <td>{{ $Article->id }}</td>
                                        <td><a href="{{ url('article/list/'.$Article->id) }}">{{ $Article->title }}
                                            

                                        </a></td>

                                        <td>


                                            <a href="{{ url('article/edit/'.$Article->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <a href="{{ url('article/delete/'.$Article->id) }}" class="btn btn-sm btn-outline-primary">Delete</a>

                                        </td>
                                    </tr>

                                @endforeach
                                
                            </table>
                    </div>   <!-- End -->
                 </div> <!-- End s12 -->
             </div>  <!-- End row -->
             <div class="row">
                 
             
                    <?php echo $Articles->links(); ?>
                </div>

                
        </div>  <!-- End container -->

        @include('footer');
    </body>
</html>
