@extends('frontendviews.main')

    @section('content')
    <section class="cmn_header_section space">
      <div class="custom_container">
          <h1>Welcome <br>
              Sign Up Today</h1>
      </div>
  </section>
  <div>

      <div class="custom_container space">
          <div class="cmn_heading mb-4">
              <h2>User Sign Up</h2>
              <p class="mt-3">Don’t have an account ? <a href="">Create your Account</a></p>
          </div>
          <!-- <div class="multiple_nav">
              <ul>
                  <li class="active">
                      <p>Account Info</p>
                      <span class="active"></span>
                  </li>
                  <li>
                      <p>School and Team Information</p>
                      <span></span>
                  </li>
                  <li>
                      <p>Billing Information</p>
                      <span></span>
                  </li>

              </ul>
          </div> -->
          <!-- user form 1 starts here -->
          {{-- <div id="wizard"> --}}
            <form id="wizard" action="{{route('user.save')}}" method="post">
                @csrf
               
           
              <h2>Account Info</h2>

              @if($errors->all())
              @foreach ($errors->all() as $error)
            <div> <span class ="text-danger">{{ $error }}</div></span>
              @endforeach
             @endif
              <section>
                  <div class="register_form_two">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                               
                           
                                  <label for="user_name">User Name</label>
                                  <input type="text" name="user_name" value="{{old('user_name')}}"  class="form-control required"  placeholder="Must Be All Letters">
                        {{-- <span class ="text-danger">@error('user_name'){{$message}} @enderror</span> --}}

                                  
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input id="password" name="password" type="password"  class="form-control required" placeholder="Enter your password" >
                        <span class ="text-danger">@error('password'){{$message}} @enderror</span>
                                  
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="confirmpassword">Confirm Password</label>
                                  <input id="confirmpassword" name="confirmpassword" type="password"  class="form-control required" placeholder="confirm Password" >
                        <span class ="text-danger">@error('confirmpassword'){{$message}} @enderror</span>
                                  
                                  
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="school_email">School Email Address</label>
                                  <input id="school_email" name="school_email_address" type="email" value="{{old('school_email_address')}}"    class="form-control required" placeholder="Enter School Email Address" >
                        <span class ="text-danger">@error('school_email_address'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="confirm_school_email">Confirm School Email Address</label>
                                  <input id="confirm_school_email" name="confirm_school_email" type="email"  class="form-control required" placeholder="Confirm School Email Address" >
                        <span class ="text-danger">@error('confirm_school_email'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="email">Personal Email Address</label>
                                  <input id="email" name="email" type="email" value="{{old('email')}}"  class="form-control required" placeholder="Enter your Personal Email" >
                        <span class ="text-danger">@error('email'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="confirm_email">Confirm Personal Email Address</label>
                                  <input id="confirm_email" name="confirm_email" type="email"  class="form-control required" placeholder="Confirm Personal Email" >
                        <span class ="text-danger">@error('confirm_email'){{$message}} @enderror</span>

                              </div>
                          </div>
                      </div>

                  </div>
              </section>

              <!-- user form one ends here -->
              <!-- user form two starts here -->
              <h2>School and Team Information</h2>
              <section>
                  <div class="register_form_two">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="name">Head Coach's Name (First and last Name)</label>
                                  <input id="name" name="name" value="{{old('name')}}" type="text"  class="form-control required" placeholder="Enter  name" >
                        <span class ="text-danger">@error('name'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="school_phone_no">School Phone Number</label>
                                  
                                  
                                <input  type="tel" id="school_phone_no" name="school_phone_no" value="{{old('school_phone_no')}}"  class="form-control required" placeholder="Enter school phone number">
                        <span class ="text-danger">@error('school_phone_no'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_name">School Name</label>
                                  <input  id="school_name" type="text" name="school_name" value="{{old('school_name')}}" class="form-control required" placeholder="Enter school name">
                        <span class ="text-danger">@error('school_name'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="personal_phone_no">Personal Phone Number</label>
                                  <input  type="tel"  id="personal_phone_no" name="personal_phone_no" value="{{old('personal_phone_no')}}" class="form-control required" placeholder="Enter personal phone number">
                        <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_address">School Address</label>
                                  <input  id="school_address" type="text"  name="school_address" value="{{old('school_address')}}" class="form-control required" placeholder="Enter school address">
                        <span class ="text-danger">@error('school_address'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="assistant_coach_name">Assistant Coach's Name (First and Last Name)</label>
                                  
                                <input  id ="assistant_coach_name" type="text" name="assistant_coach_name" value="{{old('assistant_coach_name')}}"  class="form-control required" placeholder="Enter name">
                        <span class ="text-danger">@error('assistant_coach_name'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_city">School City</label>
                                  <input type="text" name="school_city" class="form-control required" value="{{old('school_city')}}" placeholder="Enter school city">
                        <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="assistant_coach_email_address">Assistant Coach Email Address</label>
                                  <input  id="assistant_coach_email_address" type="email"   value="{{old('assistant_coach_email_address')}}" name="assistant_coach_email_address" class="form-control required" placeholder="Enter email address">
                        <span class ="text-danger">@error('assistant_coach_email_address'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="confirm_assistant_coach_email_address">Confirm Assistant Coach Email Address</label>
                                  <input id="confirm_assistant_coach_email_address" type="email" name="confirm_assistant_coach_email_address" class="form-control required" placeholder="Re enter email address">
                        <span class ="text-danger">@error('confirm_assistant_coach_email_address'){{$message}} @enderror</span>

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group no_error">
                                  <label for="school_state">School State</label>
                                  <select name="school_state" id="school_state" class="form-control required">
                                    <option   value="" disabled >Select One</option>

                                    @foreach ($states as $item)
                                        
                                    
                                      <option value="{{$item->id}}">{{ucFirst(trans($item->name))}}</option>
                                        
                                        
                                        @endforeach
                           <span class ="text-danger">@error('school_state'){{$message}} @enderror</span>


                                  </select>
                                
                              </div>
                          </div>
                          {{-- <div class="col-lg-6 ">
                            <div class="form-group no_error">
                                <label for="role">Select Role</label>
                                    <option  value="" >Select One</option>
                                    <option value="student" >Student</option>
                                      <option value="coach">Coach</option>
                        <span class ="text-danger">@error('role'){{$message}} @enderror</span>


                                </select>
                              
                            </div>
                        </div> --}}
                          <div class="col-lg-6">
                              <div class="form-group ">
                                  <label for="school_zip_code">School Zip Code</label>  
                                  <input  id="school_zip_code" type="text" name="school_zip_code"   value="{{old('school_zip_code')}}" class="form-control required" placeholder="Enter school zip code">
                        <span class ="text-danger">@error('school_zip_code'){{$message}} @enderror</span>

                              </div>
                          </div>
                      </div>

                  </div>
              </section>
              <!-- user form three starts here -->
              <h2>Billing Information</h2>
            <section>
              <div class="register_form_two">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="billing_contact_name">Billing Contact Name (First and Last Name)</label>
                              <input type="text" name="billing_contact_name"  value="{{old('billing_contact_name')}}" class="form-control required" placeholder="Enter your name">
                        <span class ="text-danger">@error('billing_contact_name'){{$message}} @enderror</span>

                          </div>
                      </div>
                      <div class="col-lg-5 ms-auto">
                          <div class="form-group">
                              <label for="billing_email_address">Billing Contact Email Address</label>
                              <input  id="billing_email_address"  type="email" name="billing_email_address"   value="{{old('billing_email_address')}}"  class="form-control required" placeholder="Enter your email">
                        <span class ="text-danger">@error('billing_email_address'){{$message}} @enderror</span>

                          </div>
                      </div>
                      <div class="col-lg-6 ">
                          <div class="form-group">
                              <label for="confirm_billing_email">Confirm Billing Contact Email Address</label>
                              <input id="confirm_billing_email" type="email"  name="confirm_billing_email"  class="form-control required" placeholder="Re Enter your email">
                        <span class ="text-danger">@error('confirm_billing_email'){{$message}} @enderror</span>

                          </div>
                      </div>
                      <div class="col-lg-5 ms-auto">
                          <div class="form-group">
                              <label for="billing_phone_no">Billing Phone Number</label>
                              <input  id="billing_phone_no" type="tel"  name="billing_phone_no"  value="{{old('billing_phone_no')}}" class="form-control required" placeholder="Enter your phone number">
                        <span class ="text-danger">@error('billing_phone_no'){{$message}} @enderror</span>

                          </div>
                      </div>
                  </div>
                  <p class="payment_method">Payment Method</p>
                  <p>(Accounts require an approved PO or payment prior to activation)</p>
              </div>
            </section>

        
        </form>
      </div>

  </div>



    @endsection
