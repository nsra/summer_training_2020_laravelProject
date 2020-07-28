
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('client_review.titles.show_client_review') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                <img src="{{$client_review->getImage()}}" alt="">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('lang.en_name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_name" value="{{ $client_review->translate('en')->name }}">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('lang.ar_name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_name" value="{{ $client_review->translate('ar')->name }}">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="en_review">{{__('lang.client_review_review_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_review" >{{ $client_review->translate('en')->review }}</textarea>
                            <span class="error">{{$errors->first('en_review')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_review">{{__('lang.client_review_review_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_review" >{{ $client_review->translate('ar')->review }}</textarea>
                            <span class="error">{{$errors->first('ar_review')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('client_reviews.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


