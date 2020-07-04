
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('permission.titles.show_permission') }}</h3>
                </div>
                <div class="card-body">

{{--                        <div class="form-group">--}}
{{--                            <label for="en_name">{{__('lang.permission_name_en')}} <span class="required">*</span></label>--}}
{{--                            <input type="text" class="form-control" name="en_name" value="{{ $permission->translate('en')->name }}">--}}
{{--                            <span class="error">{{$errors->first('en_name')}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="ar_name">{{__('permission.permission_name_ar')}} <span class="required">*</span></label>--}}
{{--                            <input type="text" class="form-control" name="ar_name" value="{{ $permission->translate('ar')->name }}">--}}
{{--                            <span class="error">{{$errors->first('ar_name')}}</span>--}}
{{--                        </div>--}}
                    <div class="form-group">
                        <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $permission->name }}">
                        <span class="error">{{$errors->first('name')}}</span>
                    </div>

                    <div class="form-action text-center">
                        <a href="{{route('permissions.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


