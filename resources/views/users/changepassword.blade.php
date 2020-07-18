@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.profile') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('user_password.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="old_password">{{__('lang.old_password')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="old_password">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="password">{{__('lang.new_password')}} <span class="required">*</span></label>
                            <input type="password" class="form-control" name="password"  required autocomplete="new-password" value="{{ old('password') }}">
                            <span class="error">{{$errors->first('password')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{__('lang.confirm_new_password')}} <span class="required">*</span></label>
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>


                        <div class="form-action text-center">
                            <a  href="{{route('user_dashboard')}}" type="reset"
                               class="btn btn-default">@lang('lang.cancel')</a>
                            <button type="submit" href="{{route('user_password.change')}}"
                               class="btn btn-default">@lang('lang.change_password')</button>
                        </div>
                </div>
                </form>
                <br>
                <br>
            </div>
        </div>
@endsection
