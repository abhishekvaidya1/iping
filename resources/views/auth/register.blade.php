@extends('layouts.login')
@section('title', 'Register')
@section('content')

<!--<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <img src="logo.png" />
      </div>-->
<div class="container">
    <div class="row justify-content-center" style="margin-top: 42px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;"><b>Registration Form</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4"></span>
                            <span class="col-md-4" accesskey=""style="color:red">Minimum 8 characters required</span>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="collage_name" class="col-md-4 col-form-label text-md-right">College Name</label>

                            <div class="col-md-6">
                                <!--<input id="collage_name" type="text" class="form-control @error('collage_name') is-invalid @enderror" name="collage_name" value="{{ old('collage_name') }}" required autocomplete="collage_name">-->
                                    <select class="form-control" id="collage_name" type="text" >
                                            <option value="Please select">-- Please select --</option>
                                            <option value="ADJoshi">A D Joshi Junior College</option>>
                                            <option value="AGPIT">A.G. Patil Institute Of Technology</option>
                                            <option value="Burla">A R Burla Mahila Varishtha Mahavidyalaya, Solapur</option>
                                            <option value="BVS">Bharati Vidyapeeth, Solapur</option>
                                            <option value="BMIT">Brahmdevdada Mane Institute of Technology</option>
                                            <option value="BMP">Brahmdevdada Mane Polytechnic</option>
                                            <option value="Velankar">DAV Velankar College of Commerce, Solapur</option>
                                            <option value="Dayanand">DBF Dayanand College of Arts and Science, Solapur</option>
                                            <option value="Soni">DHB SONI COLLEGE, SOLAPUR</option>
                                            <option value="GP">Government Polytechnic, Solapur</option>
                                            <option value="HN">Hirachand Nemchand College of Commerce, Solapur</option>
                                            <option value="MIM">Mangalvedhekar Institute of Management, Solapur</option>
                                            <option value="Orchid">Nagesh Karajagi Orchid College Of Engineering Technology</option>
                                            <option value="Sinhgad">N. B. Navale Sinhgad College Of Engineering</option>
                                            <option value="Sangameshwar">Sangameshwar College, Solapur</option>
                                            <option value="SIET">Shriram Institute Of Engineering And Technology Centre, Solapur</option>
                                            <option value="SESP">Solapur Education Society Polytechnic, Solapur</option>
                                            <option value="SPM">SPM Polytechnic College</option>
                                            <option value="SU">Solapur University</option>
                                            <option value="SSWP">Shri Siddheshwar Women's Polytechnic College</option>
                                            <option value="SVERI">Shri Vithal Education and Research Institute College of Engineering, Solapur</option>
                                            <option value="SVIT">Swami Vivekananda Institute Of Technology</option>
                                            <option value="VVP">Vidya Vikas Pratishthan Institute Of Engineering & Technology</option>
                                            <option value="WIT">Walchand Institute Of Technology, Solapur</option>                                            
                                            <option value="Other">Other</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
<!--                                <a href="{{url('login')}}" class="btn btn-primary">
                                    Login
                                </a>  -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
         
    <!--</section>-->
@endsection
