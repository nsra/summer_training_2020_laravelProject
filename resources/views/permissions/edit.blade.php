@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.edit_permission') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('permissions.update', $permission->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


{{--                        <div class="form-group">--}}
{{--                            <label for="en_name">{{__('lang.permission_name_en')}} <span class="required">*</span></label>--}}
{{--                            <input type="text" class="form-control" name="en_name" value="{{ old('en_name', optional($permission->translate('en'))->name) }}">--}}
{{--                            <span class="error">{{$errors->first('en_name')}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="ar_name">{{__('lang.permission_name_ar')}} <span class="required">*</span></label>--}}
{{--                            <input type="text" class="form-control" name="ar_name" value="{{ old('ar_name', optional($permission->translate('ar'))->name) }}">--}}
{{--                            <span class="error">{{$errors->first('ar_name')}}</span>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', optional($permission)->name) }}">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>

                </div>

                <div class="form-action text-center">
                    <button type="submit"  class="btn btn-primary">@lang('lang.edit')</button>
                    <button href="{{route('permissions.index')}}" type="reset"
                            class="btn btn-default">@lang('lang.cancel')</button>
                </div>
            </div>
            </form>
            <br>
            <br>
        </div>
    </div>
    </div>
    </div>


@endsection

