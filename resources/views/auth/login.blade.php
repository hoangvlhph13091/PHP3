
<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		@yield('title')
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon.ico" />
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->
        @include('admin.layouts.style')
		
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
		<div class="loader hide">
			<img class="center" src="{{ asset('frontend') }}/images/loading_001.gif" alt="">
			<p class="vertical-center">Vui lòng chờ . . .</p>
		</div>

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

				
          <div class="m-content">
  
            <!--Begin::Section-->
            <div class="m-portlet m-portlet--tab">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                      <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                      Login
                    </h3>
                  </div>
                </div>
              </div>
            
              <!--begin::Form-->
              <form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
              @endif
              @if(session()->has('error'))
                  <div class="alert alert-danger">
                      {{ session()->get('error') }}
                  </div>
              @endif
                <div class="m-portlet__body">
                  <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control m-input m-input--square" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <span class="m-form__help">We'll never share your email with anyone else.</span>
                  </div>
                    @error('email')
                        <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                  <div class="form-group m-form__group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control m-input m-input--square" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  @error('password')
                    <div class="alert text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
              
              </form>
            
              <!--end::Form-->
            </div>
  
            <!--End::Section-->
          </div>
        </div>
      </div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->


		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->


		<!--begin::Global Theme Bundle -->
		@include('admin.layouts.script')
		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
        @yield('page-script')
		@include('popper::assets')
	
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
