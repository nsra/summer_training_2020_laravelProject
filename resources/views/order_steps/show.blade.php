
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('order_step.titles.show_order_step') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$order_step->getImage()}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="number">{{__('lang.number')}} <span class="required">*</span></label>
                            <input type="number" class="form-control" name="number" value="{{$order_step->number}}">
                            <span class="error">{{$errors->first('number')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_title">{{__('lang.en_title')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_title" value="{{ $order_step->translate('en')->title }}">
                            <span class="error">{{$errors->first('en_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_title">{{__('lang.ar_title')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_title" value="{{ $order_step->translate('ar')->title }}">
                            <span class="error">{{$errors->first('ar_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_description">{{__('lang.en_description')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_description" >{{ $order_step->translate('en')->description }}</textarea>
                            <span class="error">{{$errors->first('en_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('lang.ar_description')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_description" >{{ $order_step->translate('ar')->description }}</textarea>
                            <span class="error">{{$errors->first('ar_description')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('order_steps.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


