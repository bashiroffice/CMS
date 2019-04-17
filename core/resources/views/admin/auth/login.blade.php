
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootadmin.min.css')}}">

    {{--customs css--}}
    <link rel="stylesheet" href="{{asset('assets/admin/css/customs.css')}}">

    {{--toastr--}}
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="{{asset('assets/admin/css/toastr.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/admin/js/toastr.js')}}"></script>
</head>
<body class="bg-light">

{{--toastr--}}
<script>
    @if(Session()->has('success'))

toastr.success("{{Session('success')}}")
    @endif

    @if(Session()->has('warning'))

toastr.warning("{{Session('warning')}}")
    @endif
</script>

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-4">
            <h1 class="text-center mb-4">Admin Login</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('admin.login.post')}}">
                      @csrf

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="userName" class="form-control {{ $errors->has('userName') ? ' is-invalid' : '' }}" value="{{ old('userName') }}" placeholder="Username">
                            @if ($errors->has('userName'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="row">
                            <div class="col pr-2">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=" {{asset('assets/admin/js/jquery.min.js')}}"></script>
<script src=" {{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('assets/admin/js/datatables.min.js')}}"></script>
<script src=" {{asset('assets/admin/js/moment.min.js')}}"></script>
<script src=" {{asset('assets/admin/js/fullcalendar.min.js')}}"></script>
<script src=" {{asset('assets/admin/js/bootadmin.min.js')}}"></script>

</body>
</html>