@extends('layouts.vmsapp')

@section('title')
Client Creation
@endsection

@section('subheader')
    New Client Createion
@endsection
@section('subheader-content')

@endsection

@section('subheader-action')
    @can('customers-list')
        <a href="{{ route('customers.index') }}" class="btn btn-success pull-left">
            Go Client List
        </a>
    @endcan
@endsection


@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->



    <!-- end:: Content Head -->

        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


            <div class="row justify-content-md-center justify-content-lg-center">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

            <div class="kt-portlet">

                <!--begin::Form-->

                {!! Form::open(['route' => 'customers.store','method'=>'POST','class'=>'kt-form kt-form--label-right','files'=>true]) !!}
										<div class="kt-portlet__head form-header">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">

                                                    Client details
												</h3>
											</div>
										</div>
                                        
											<div class="kt-portlet__body">
												

												<div class="form-group row">
													<label for="example-text-input" class="col-3 col-form-label">Full Name <sup class="text-danger">*</sup></label>
													<div class="col-9">
                                                    {!! Form::text('name', $value=old('name'), array('placeholder' => 'Name','class' => 'form-control','required'=>true)) !!}
                                                    
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
													</div>
												</div>



                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Mobile <sup class="text-danger">*</sup></label>
                                                    <div class="col-9">
                                                        {!! Form::text('mobile', $value=old('mobile'), array('placeholder' => 'Mobile','class' => 'form-control','required'=>true)) !!}

                                                        @if ($errors->has('mobile'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('mobile') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Email</label>
                                                    <div class="col-9">
                                                        {!! Form::email('email', $value=old('email'), array('placeholder' => 'Email address','class' => 'form-control','required'=>false)) !!}

                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Password  <sup class="text-danger">*</sup></label>
                                                    <div class="col-9">
                                                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required'=>true)) !!}

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Confirm Password <sup class="text-danger">*</sup></label>
                                                    <div class="col-9">
                                                        {!! Form::password('confirm_password', array('placeholder' => 'Confirm Password','class' => 'form-control','required'=>true)) !!}

                                                        @if ($errors->has('confirm_password'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('confirm_password') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Company Name</label>
                                                    <div class="col-9">
                                                        {!! Form::text('company_name', $value=old('company_name'), array('placeholder' => 'Company Name Here','class' => 'form-control','required'=>false)) !!}

                                                        @if ($errors->has('company_name'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('company_name') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Another Contact</label>
                                                    <div class="col-9">
                                                        {!! Form::text('contact', $value=old('contact'), array('placeholder' => 'Contact number','class' => 'form-control','required'=>false)) !!}

                                                        @if ($errors->has('contact'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('contact') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Address </label>
                                                    <div class="col-9">
                                                        {!! Form::text('address', $value=old('address'), array('placeholder' => 'Address','class' => 'form-control','required'=>false)) !!}

                                                        @if ($errors->has('address'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('address') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Discount Percent %</label>
                                                    <div class="col-9">
                                                        {!! Form::number('discount_percent', $value=old('discount_percent',0), array('min'=>0,'max'=>100,'placeholder' => '','class' => 'form-control','required'=>false)) !!}

                                                        @if ($errors->has('discount_percent'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('discount_percent') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Profile Photo</label>
                                                    <div class="col-9">

                                                        <label class="slide_upload" for="file">
                                                            <!--  -->
                                                            <img id="image_load" src="{{asset('images/default/default.png')}}" style="width: 150px; height: 150px;cursor:pointer;">

                                                        </label>
                                                        <input id="file" style="display:none" name="avatar" type="file" onchange="photoLoad(this,this.id)" accept="image/*">


                                                        @if ($errors->has('avatar'))
                                                            <span class="help-block">
                                                            <strong class="text-danger">{{ $errors->first('avatar') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                </div>


									
											</div>
											<div class="kt-portlet__foot form-footer">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-2">
														</div>
														<div class="col-10">
															<button type="submit" class="btn btn-warning ">Submit</button>
                                                            @can('customers-list')
                                                                <a href="{{route('customers.index')}}" class="btn btn-secondary pull-right "> Cancel </a>
                                                            @endcan

														</div>
													</div>
												</div>
											</div>
                                            {!! Form::close() !!}
									</div>
                            </div>
                        </div>
        </div>

            <!--End::Row-->

            <!--End::Dashboard 1-->
    </div>

        <!-- end:: Content -->

@endsection

@section('script')

    <script type="text/javascript">


        function photoLoad(input,image_load) {
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection

<!-- Good -->





