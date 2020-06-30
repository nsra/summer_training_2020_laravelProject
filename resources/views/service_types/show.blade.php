
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('service_type.titles.show_service_type') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$service_type->getImage()}}" alt="">
                                </div>
                             </div>
                        </div>
                        <div class="form-group">
                            <label for="en_name">{{__('lang.service_type_name_en')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_name" value="{{ $service_type->translate('en')->name }}">
                            <span class="error">{{$errors->first('en_name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_name">{{__('lang.service_type_name_ar')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_name" value="{{ $service_type->translate('ar')->name }}">
                            <span class="error">{{$errors->first('ar_name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_about_service">{{__('lang.service_type_about_service_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_about_service" >{{ $service_type->translate('en')->about_service }}</textarea>
                            <span class="error">{{$errors->first('en_about_service')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_about_service">{{__('lang.service_type_about_service_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_about_service" >{{ $service_type->translate('ar')->about_service }}</textarea>
                            <span class="error">{{$errors->first('ar_about_service')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('service_types.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


