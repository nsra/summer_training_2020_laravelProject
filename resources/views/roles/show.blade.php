
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('role.titles.show_role') }}</h3>
                </div>
                <div class="card-body">


                    <div class="form-group">
                        <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $role->name }}">
                        <span class="error">{{$errors->first('name')}}</span>
                    </div>

                    <div class="form-action text-center">
                        <a href="{{route('roles.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


