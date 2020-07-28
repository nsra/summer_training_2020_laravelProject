
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('project.titles.show_project') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$project->images->first()->getImage()}}" alt="">
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="en_title">{{__('lang.project_title_en')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_title" value="{{ $project->translate('en')->title }}">
                            <span class="error">{{$errors->first('en_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_title">{{__('lang.project_title_ar')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_title" value="{{ $project->translate('ar')->title }}">
                            <span class="error">{{$errors->first('ar_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_description">{{__('lang.project_description_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_description" >{{ $project->translate('en')->description }}</textarea>
                            <span class="error">{{$errors->first('en_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('lang.project_description_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_description" >{{ $project->translate('ar')->description }}</textarea>
                            <span class="error">{{$errors->first('ar_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="service_type">{{__('lang.project_service_type')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="service_type" >{{ $service_type->name }}</textarea>
                            <span class="error">{{$errors->first('service_type')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('projects.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


