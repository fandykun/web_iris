@extends('layouts.landing')

@section('style')
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
@if (\Session::has('success'))
  <div class="alert alert-success text-center" role="alert">
    Thank you for your registration!
  </div>
@elseif (\Session::has('error'))
  <div class="alert alert-danger text-center" role="alert">
    Error!
  </div>
@endif
<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
<div class="hero-wrapper">
    <div class="hero-left">
    <h1 class="hero-title">Open Recruitment</h1>
    <p>Join and lets start adventure with us!</p>
    <ul class="hero-info d-none d-lg-block">
        <li>
            <i class="fa fa-users"></i>
            <h4>16 Active Members</h4>
        </li>
        <li>
            <i class="fa fa-android"></i>
            <h4>5 Robots</h4>
        </li>
        <li>
            <i class="fa fa-trophy"></i>
            <h4>17 Achievements</h4>
        </li>
    </ul>
    </div>
    <div class="hero-right">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel-item">
          <img class="img-fluid" src="{{ asset('img/iris/banner-3.jpg') }}" alt="">
        </div>
      </div>
    </div>
    <ul class="social-icons d-none d-lg-block">
      <li><a href="mailto:iris.krsbi@gmail.com"><i class="ti-email"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCOmBeTiru1hFtOiGXneI_Gw" target="_blank"><i class="ti-youtube"></i></a></li>
      <li><a href="https://www.instagram.com/iris.itsrobotic" target="_blank"><i class="ti-instagram"></i></a></li>
    </ul>
</div>
</section>
<!--================Hero Banner Section end =================-->

  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
        <div class="wrapper">
            <div class="inner">
                <form id="sendOprec" action="{{ route('oprec.store') }}" method="POST" id="oprecForm" enctype="multipart/form-data">
                    <h3 class="text-center">REGISTRATION FORM</h3><br>   
                    @csrf
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="NRP" id="NRP" type="text" placeholder="NRP" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="department" id="department" type="text" placeholder="Department" required>
                    </div>
                    <div class="form-group">
                        <select name="division" id="division" class="form-control" required>
                        <option value="disabled" disabled selected>Select your division:</option>
                        <option value="Official Division">Official Division</option>
                        <option value="Mechanical Division">Mechanical Division</option>
                        <option value="Electronic Division">Electronic Division</option>
                        <option value="Programming Division">Programming Division</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5>CV</h5>
                        <small>PDF Max. Size: 1 MB (format: NRP_CV)</small>
                        <input name="CV" class="form-control-file" id="CV" type="file" required/>
                    </div>
                    <div class="form-group">
                        <h5>KTM</h5>
                        <small>PDF Max. Size: 1 MB (format: NRP_KTM)</small>
                        <input name="KTM" class="form-control-file" id="KTM" type="file" required/>
                    </div>
                    <div class="form-group">
                        <h5>General Essay</h5>
                        <small>PDF Max. Size: 1 MB (format: NRP_EssayGeneral)</small>
                        <input name="essay_general" class="form-control-file" id="essay_general" type="file" required/>
                    </div>
                    <div class="form-group" id="essay_division">
                        <h5>Division Essay</h5>
                        <small>PDF Max. Size: 1 MB (format: NRP_EssayDivision)</small>
                        <input name="essay_division" class="form-control-file" id="essay_division" type="file" required/>
                    </div>
                    <hr><br>
                <div class="form-group text-center">
                    <button type="button" class="button button-contactForm  mt-auto confirm">Submit Form</button>
                </div>
                </form>
            </div>
        </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

@endsection

@section('script')
<script src="{{ asset('js/bootbox.all.min.js') }}"></script>

<script>
  $('.nav-oprec').addClass("active");

  $(function() {
    $('#division').on('change', function() {
      if(this.value == 'Official Division') {
        $('#essay_division').hide();
      }
      else {
        $('#essay_division').show();
      }
    });
  });

  $(document).on('click', '.confirm', function() {
    if( ($('#name').val() == '') || ($('#NRP').val() == '') || ($('#department').val() == '') ||
        ($('#CV').get(0).files.length == 0) || ($('#KTM').get(0).files.length == 0) ||
        ($('#essay_general').get(0).files.length == 0) ) {
      bootbox.alert({
        message: "Please fulfill your data!",
        centerVertical: 'True',
        size: 'small'
      });
    }
    else {
      bootbox.confirm({
        message: "Are you sure?",
        centerVertical: 'True',
        size: 'small',
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if(result == true)
              $('#sendOprec').submit();
            console.log('This was logged in the callback: ' + result);
        }
      });
    }
  });
</script>
@endsection