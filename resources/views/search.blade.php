<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>:: Search </title>
        <link rel="icon" href="{{ URL::asset('/css/favicon.jpg') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

         <script type="text/javascript" src="{{ URL::asset('/js/jquery.js') }}"></script>
         <script type="text/javascript" src="{{ URL::asset('/js/typesahead.js') }}"></script>



    </head>
    <body>
         @include('header')
         <div class="container mh">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex mt">
                      {{ }}
                              <div class="input-group">
                                  <input id="search_" name="search" type="text" class="form-control" placeholder="Search" />
                          </div>
                    </div>
                </div>  <!-- End -->
                 
            </div>  <!-- End -->
         </div>  <!-- End Container -->    
         @include('footer')   

<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#search_').typeahead({
        highlight: true,
        minLength: 1,
        offset: true, 
        hint: true,
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                console.log(data);                
                return process(data);
            });
        },
        template: {
          suggestion:function(data) {
            return "<a>"+ data +"</a>"
          }
        }
        


    });
</script> 
    </body>
</html>
