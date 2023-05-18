<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div id="printdiv">
        <h4>Print Results</h4>
        @foreach($search as $item)

        <div class="search_item" id= "print">
    
                <h5 class="mb-3"><b> Title : {{$item->title}}</b></h5>
    
                <h5 class="mb-3"><b> Author(s):  {{$item->author}}</b></h5>
    
                    <div class="table-responsive">
    
                        <table class="table table-bordered">
    
                            <thead>
    
                                <tr>
    
                                <th scope="col">Book/Link</th>
    
                                  <th scope="col">Publisher</th>
    
                                  <th scope="col">ISBN #</th>
    
                                  <th scope="col">Award History</th>
    
                                  <th scope="col">Type</th>
    
                                  <th scope="col">Character</th>
    
                                  <th scope="col">Category</th>
    
                                  {{-- <th scope="col">Rating</th> --}}
    
                                  <th scope="col">Theme</th>
    
                                </tr>
    
                              </thead>
    
                              <tbody>
    
                                <tr>
    
                                  <td> <a href="{{$item->book}}" target="_blank">Link</a></td> 
    
                                    <td>{{$item->publisher}}</td>
    
                                    <td> #{{$item->isbn}}</td>
    
                                    <td>{{$item->award_name}}</td>
    
                                    <td>{{$item->type}}</td>
    
                                    <td>{{$item->characters}}</td>
    
                                    <td>{{$item->category->name}}</td>
    
                                    {{-- <td>PG-13 - High School</td> --}}
    
                                    <td>{{$item->theme->name}}</td>
    
                                </tr>
                              
                              </tbody>
    
                          </table>
    
                    </div>
    
                    <h5 class="mb-3"><b>Summary</b></h5>
    
                    <p>{{$item->summary}}</p>
    
        </div>
    
        @endforeach



    </div>
    

    <script type="text/javascript">     
        
         var divToPrint = document.getElementById('printdiv');
         var popupWin = window.open('', '_blank', 'width=300,height=300');
         popupWin.document.open();
         popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
          popupWin.document.close();
              
   </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>