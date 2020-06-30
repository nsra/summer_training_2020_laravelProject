
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('company_feature.titles.show_feature') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$company_feature->getImage()}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="en_title">{{__('lang.company_feature_title_en')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_title" value="{{ $company_feature->translate('en')->title }}">
                            <span class="error">{{$errors->first('en_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_title">{{__('lang.company_feature_title_ar')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_title" value="{{ $company_feature->translate('ar')->title }}">
                            <span class="error">{{$errors->first('ar_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_description">{{__('lang.company_feature_description_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_description" >{{ $company_feature->translate('en')->description }}</textarea>
                            <span class="error">{{$errors->first('en_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('lang.company_feature_description_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_description" >{{ $company_feature->translate('ar')->description }}</textarea>
                            <span class="error">{{$errors->first('ar_description')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('company_features.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


