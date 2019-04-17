@extends('admin.master')

@section('title', 'Basic Settings')

@section('body')



    <h2 class="mb-4">Basic Settings</h2>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Basic Settings
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.basicSettingsPro')}}">
                @csrf

                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="validationServer01"><strong>WebSite Title</strong></label>
                        <input type="text" name="websiteTitle" class="form-control form-control-lg"  value="{{$basicSetting->websiteTitle}}" required="">

                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="validationServer01"><strong>Site base color code</strong></label>
                        <input type="text" name="colorCode" class="form-control form-control-lg"  value="{{$basicSetting->colorCode}}" required="" style="background: {{$basicSetting->colorCode}};">

                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>Base Currency text</strong></label>
                        <input type="text" name="currencyText" class="form-control form-control-lg" value="{{$basicSetting->currencyText}}" required="">

                    </div>

                </div>


                <div class="form-row">


                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>Base Currency symbol</strong></label>
                        <input type="text" name="currencySymbol" class="form-control form-control-lg" value="{{$basicSetting->currencySymbol}}" required="">

                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>Registration</strong></label><br>
                        <input type="checkbox" name="registration" data-toggle="toggle" data-width="530" data-height="" data-offstyle="danger"
                                {{($basicSetting->registration==1 ? 'checked':'')}}>

                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>Email Verification</strong></label><br>
                        <input type="checkbox" name="EmailVerification" data-toggle="toggle" data-width="530" data-height="" data-offstyle="danger"
                                {{($basicSetting->EmailVerification==1 ? 'checked':'')}}>

                    </div>

                </div>

                <div class="form-row">


                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>SMS Verification</strong></label><br>
                        <input type="checkbox" name="SMSVerification" data-toggle="toggle" data-width="530" data-height="" data-offstyle="danger"
                                {{($basicSetting->SMSVerification==1 ? 'checked':'')}}>

                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>Email Notification</strong></label><br>
                        <input type="checkbox" name="EmailNotification" data-toggle="toggle" data-width="530" data-height="" data-offstyle="danger"
                                {{($basicSetting->EmailNotification==1 ? 'checked':'')}}>

                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="validationServer02"><strong>SMS Notification</strong></label><br>
                        <input type="checkbox" name="SMSNotification"  data-toggle="toggle" data-width="530" data-height="" data-offstyle="danger"
                                {{($basicSetting->SMSNotification==1 ? 'checked':'')}}>

                    </div>

                </div>


                <div class="card-footer bg-white ">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">UPDATE</button>
                </div>



            </form>
        </div>

    </div>

    {{--dropdown active--}}
    <script>
        $('#sm_base li:nth-child(1)').addClass('active');
        $('#sm_base').addClass('show');
    </script>
@endsection