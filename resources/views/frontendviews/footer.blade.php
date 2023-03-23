
    <footer class="space">
        <div class="custom_container">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="{{url('/')}}" class="footer_logo"><img src="{{asset('/public/4n61/images/fanatic_logo_white.svg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-md-3">
                <div>
               <p>
                    4N6 Speech & Drama <br>
                    13157 SE Spring Mountain <br>
                    Drive Happy Valley, <br>
                    OR 97086</p>

                    <a href="mailto:laurie@4n6speech&drama.com">laurie@4n6speech&drama.com</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="quick_links">
                    <ul>
                        <li><a href="{{url('aboutUs')}}">About Us</a></li>
                        <li><a href="{{url('documents')}}">Documents</a></li>
                        <li><a href="{{url('contactUs')}}">Contact Us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subscritpion">
                    <h4>Join Our Mailing List</h4>
                    <form action="">
                        <div>
                            <input type="email" placeholder="Email">
                           <div>
                            <button>Send</button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <script src="{{asset('/public/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/public/js/popper.min.js')}}"></script>
    <script src="{{asset('/public/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('/public/js/validate.min.js')}}"></script>
    <script src="{{asset('/public/js/additional.min.js')}}"></script>
<script src="{{asset('/public/js/toast.js')}}"></script>
    

    <script src="{{asset('/public/4n61/js/jquery.steps.js')}}"></script>
    

    

    
     
    <script>
       

          jQuery(document).ready(function() {
            
             toastr.options.timeOut = 10000;

             @if (Session::has('error'))
            
                 toastr.error('{{ Session::get('error') }}');
             @elseif(Session::has('success'))
                 toastr.success('{{ Session::get('success') }}');
             @endif
         });
        
    


  var form = $("#wizard");
 form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },

    rules: {
        user_name: { lettersonly: true },

        
        confirmpassword: {
            equalTo: "#password"  
               
    },
    confirm_school_email: {
            equalTo: "#school_email" ,
           
               
    },
    confirm_email: {
            equalTo: "#email"          
               
    },
    confirm_assistant_coach_email_address: {
            equalTo: "#assistant_coach_email_address"  
               
    },
    confirm_billing_email: {
            equalTo: "#billing_email_address"  
               
    },
      school_phone_no: {

     phoneUS: true
},
     personal_phone_no: {

      phoneUS: true
     
},
     billing_phone_no: {

     phoneUS: true
},
    school_zip_code: {

    zipcodeUS: true
},
    


     
},
messages: {
    confirmpassword: "Please enter the same password",
    confirm_school_email: "Please enter the same school email",
    confirm_email: "Please enter the same personal email",
    confirm_assistant_coach_email_address: "Please enter the same assitant coach email",
    confirm_billing_email: "Please enter the same billing email",
    user_name:"Must Be All Letters",
     
    }


  });
  form.steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
        
      
    }
});
    </script>
    
    
</body>

</html>