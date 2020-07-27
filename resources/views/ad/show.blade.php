
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('ad.titles.show_ad') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$ad->getImage()}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="number">{{__('lang.number')}} <span class="required">*</span></label>
                            <input type="number" class="form-control" name="number" value="{{$ad->number}}">
                            <span class="error">{{$errors->first('number')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_title">{{__('lang.en_title')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_title" value="{{ $ad->translate('en')->title }}">
                            <span class="error">{{$errors->first('en_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_title">{{__('lang.ar_title')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_title" value="{{ $ad->translate('ar')->title }}">
                            <span class="error">{{$errors->first('ar_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_button">{{__('lang.en_button')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_button" value="{{$ad->translate('ar')->button}}">
                            <span class="error">{{$errors->first('en_button')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_button">{{__('lang.ar_button')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_button" value="{{$ad->translate('ar')->button }}">
                            <span class="error">{{$errors->first('ar_button')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="link">{{__('lang.link')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="link" value="{{$ad->link}}">
                            <span class="error">{{$errors->first('link')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_description">{{__('lang.en_description')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_description" >{{ $ad->translate('en')->description }}</textarea>
                            <span class="error">{{$errors->first('en_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('lang.ar_description')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_description" >{{ $ad->translate('ar')->description }}</textarea>
                            <span class="error">{{$errors->first('ar_description')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('ads.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


