@extends('admin.master')

@section('title', 'profile')

@section('body')

    <h2 class="mb-4">Change Admin Password</h2>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Change Admin Password
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.changePassword')}}">
                @csrf

                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="sms_api" style="text-transform: uppercase;"><strong>Current password</strong></label>
                        <input type="password" class="form-control form-control-lg {{ $errors->has('current_password') ? ' is-invalid' : '' }}"  name="current_password">
                        @if ($errors->has('current_password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="sms_api" style="text-transform: uppercase;"><strong>New password</strong></label>
                        <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-12  container-fluid">
                    <div class="form-group">
                        <label for="sms_api" style="text-transform: uppercase;"><strong>Re-type password</strong></label>
                        <input type="password" class="form-control form-control-lg {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"  name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-secondary btn-block btn-lg">UPDATE</button>
                </div>
            </form>
        </div>
    </div>

@endsection