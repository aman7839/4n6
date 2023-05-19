@extends('frontendviews.main')



    @section('content')



    <section class="cmn_header_section space" style="background-image:{{asset('url(public/4n61/images/demo_bg.jpg)')}};">

        <div class="custom_container">

            <h1>Demo</h1>

        </div>

    </section>





    <div class="custom_container space">

        <div class="cmn_heading">

            <h2>Demo search</h2>

        </div>

    </div>

<!-- demo search section satrts here -->

    <section class="deom_outer space pt-0">

        <div class="container">

            <ul class="p-0">

                <li>A detailed USER'S GUIDE is available on the User's Guides page of this website.</li>

                <li>This demo search will return 10 random records for each search.  It will also display the TOTAL NUMBER of records in our 

                    database that meet your search criteria.  </li>

                    <li>The system is set to allow for 3 demo searches -- However, by closing your browser and reopening the 4N6 Fanatics 

                        webpage, you can gain additional demo searches.</li>

                        <li>In your results, click on the "+" to the left of each title to expand the record.  If you see the words "CUTTING AVAILABLE 

                            IN THE VAULT," you will not be able to access it as part of your DEMO search. If you would like a sample of a CUTTING stored 

                            in the VAULT, email us at laurie@4n6fanatics.com and we'd be happy to send a sample to you for your review.</li>

            </ul>

           
     @auth
     @if(auth()->user()->role == "coach")
            <form action="{{url('coach/search')}}" method = "POST">
@endif

@if(auth()->user()->role == "student")
            <form action="{{url('student/search')}}" method = "POST">
@endif
@if(auth()->user()->role == "admin")
            <form action="{{url('admin/search')}}" method = "POST">
@endif
              @endauth
              @csrf
               <div class="row">

                <div class="col-md-6">

                  <div class="form-group" >

                    <label for="wide_search">Search</label>

                    <input type="text" name ="wide_search"   class="form-control" placeholder="Search by any keyword" value = "{{$fullSearch}}">

                </div>

                    <div class="form-group">

                        <label for="title">Title</label>

                        <input type="text" name ="title"   class="form-control" placeholder="eg: 13 Reasons Why" value = "{{$title}}">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="author">Author</label>

                        <input type="text"  name = "author"  value = "{{$author}}" class="form-control" placeholder="eg: king stephen">

                    </div>

                </div>

                

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="selectType">Select Type</label>

                      <select name="type" id="" class="form-control" >

                        <option value= "" >--Select Type --</option>



                        <option value="Humorous "   {{$type == 'Humorous' ? 'selected':''}}>Humorous</option>

                        <option value="Serious"  {{$type == 'Serious' ? 'selected':''}}>Serious</option>

                        

                      </select> 

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="characters">Select Characters</label>

                      <select name="characters" id="characters" class="form-control " >

                        <option value="" >--Select Type --</option>


                        <option value="All " {{$characters == 'All' ? 'selected':''}}>All</option>

                        <option value="Male" {{$characters == 'Male' ? 'selected':''}}>Male</option>                

                        <option value="Female" {{$characters == 'Female' ? 'selected':''}} >Female</option>

                        <option value="F/F " {{$characters == 'F/F' ? 'selected':''}}>F/F</option>

                        <option value="M/M " {{$characters == 'M/M' ? 'selected':''}}>M/M</option>

                        <option value="M/F " {{$characters == 'M/F' ? 'selected':''}}>M/F</option>




                      </select>

                    </div>

                </div>

                {{-- <div class="col-md-6">

                    <div class="form-group">

                        <label for="selectAge">Select Age Group</label>

                      <select name="" id="" class="form-control" >

                        <option value=" ">1-6</option>

                        <option value="">6-8</option>

                        <option value=" ">8-15</option>

                      </select>

                    </div>

                </div> --}}

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="selectAvailability">Online Availability</label>

                      <select name="" id="" class="form-control" >

                        <option value=" " > --Select--</option>



                        <option value=""> FULL TEXT LINK AVAILABLE</option>

                        <option value="">STORED IN THE VAULT OF CUTTINGS</option>

                      

                      </select>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="selectAwards">Select Awards</label>

                      <select name="award_name" id="" class="form-control" >

                        <option value=" " > --Select Awards--</option>



                        @foreach ($awards as $item)

                            

                        <option value="{{$item->id}}"  {{$item->id == ($award ) ? 'selected':''}} >{{$item->awards_name}}</option>

                        @endforeach



                       

                      </select>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="selectcategory">Select Category</label>

                      <select name="category_name" id="" class="form-control" >



                        <option value=" " > --Select Category--</option>



                        @foreach ($category as $item)

                            

                        <option value=" {{$item->id}}"  {{$item->id == ($categories ) ? 'selected':''}}>{{$item->name}}</option>

                        @endforeach

                       

                      </select>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="selectcategory">Select Theme</label>

                      <select name="theme_name" id="" class="form-control" >



                        <option value=" " > --Select Theme--</option>



                        @foreach ($theme as $item)

                            

                        <option value=" {{$item->id}}" {{$item->id == ($themes ) ? 'selected':''}}>{{$item->name}}</option>

                        @endforeach

                      </select>

                    </div>

                </div>

                <div class="text-center mb-2 mt-2">

                  <input type="submit" class="cmn_btn" value ="Search">

                       {{-- <button class="cmn_btn"> Search </button> --}}
          @auth
                       @if(auth()->user()->role == "coach")
                       <a href="{{url('coach/search')}}" class="cmn_btn">Reset</a> 
                     @endif
                     @if(auth()->user()->role == "student")
                     <a href="{{url('student/search')}}" class="cmn_btn">Reset</a> 
                   @endif
                   @if(auth()->user()->role == "admin")
                   <a href="{{url('admin/search')}}" class="cmn_btn">Reset</a> 
                 @endif



        @endauth

                </div>

               </div>

            </form>



    @if($title || $author || $type || $characters || $award || $themes ||  $categories || $fullSearch != "")

           <div class="all_results">

                <div class="search_header">

                        <h6>Search results</h6>

                        <div>

                            {{-- <p>Records-found: <b>{{$pendingsession>0 ? $search->count() :$pendingsession }}</b></p> --}}
                            <p>Records-found: <b>{{ $search->count() }}</b></p>

                            
                             {{-- <p>Searches Remaining: <b>{{$pendingsession}}</b></p> --}}

                        </div>

                </div>

    @if($search->count()>0)
@auth
                {{-- @if($pendingsession>0) --}}
                @if(auth()->user()->role == "coach")

                <form action="{{url('coach/searchprints')}}" method="POST" id="formSearch"  enctype="multipart/form-data">
@endif
@if(auth()->user()->role == "student")

                <form action="{{url('student/searchprints')}}" method="POST" id="formSearch"  enctype="multipart/form-data">
@endif
@if(auth()->user()->role == "admin")

                <form action="{{url('admin/searchprints')}}" method="POST" id="formSearch"  enctype="multipart/form-data">
@endif
@endauth
                  @csrf
                  @foreach($search as $item)

                  <div class="search_item">

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
                                            <th scope="col">Select to Print Summary</th>


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

                                               <td><input type="checkbox" id="{{$item->id}}" name="printBox[]" value={{$item->id}}></td>

                                          </tr>
                                         
                                        </tbody>

                                    </table>

                              </div>

                              <h5 class="mb-3"><b>Summary</b></h5>

                              <p>{{$item->summary}}</p>

                  </div>

                  @endforeach

                  <input type="submit" id="doPrint" name="doPrint" class="cmn_btn" value="Print Selected Items" onclick="checkNone(this)">
		              <input type="submit" id="doPrint" name="doPrint" class="cmn_btn" value="Print All Items" onclick="checkAll(this)">
                </form>

                <div id="validationError"></div>

                {{-- @elseif ($pendingsession == 0)
                
                <h5 class="text-center mt-3">You are out of Demo Searches! Please subscribe to 4N6 Fanatics to <a href="{{url('login')}}">continue your research!</a></h5>

               @endif --}}
     @endif
                 @else 

                <h5 class="text-center mt-3">You must specify at least one search criteria</h5> 


      @endif    
               

           </div>

        </div>
      </section>

      <script>

        function checkAll(){

          var item = document.getElementsByName("printBox[]");
          for (var i=0; i < item.length; i++) {
              item[i].checked = true;
          }

        }

        function checkNone(){

          event.preventDefault();

          var totalCheckedItems=0;

          var item = document.getElementsByName("printBox[]");
            for (var i=0; i < item.length; i++) {

               if(item[i].checked == true){

                  totalCheckedItems++;
                }               
            }

           if(totalCheckedItems > 0){

           document.getElementById('formSearch').submit();

           }else{
            
              alert('please select checkbox to print');
            // document.getElementById('validationError').innerHTML ="<div style='color:red'><b>please select checkbox to print </b></div>";
           }
          
          }


      </script>
    @endsection

   