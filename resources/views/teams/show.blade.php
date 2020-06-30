
@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('team.titles.show_team') }}</h3>
                </div>
                <div class="card-body">
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="{{$team->getImage()}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="en_name">{{__('lang.team_name_en')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_name" value="{{ $team->translate('en')->name }}">
                            <span class="error">{{$errors->first('en_name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_name">{{__('lang.team_name_ar')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_name" value="{{ $team->translate('ar')->name }}">
                            <span class="error">{{$errors->first('ar_name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="en_bio">{{__('lang.team_bio_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_bio" >{{ $team->translate('en')->bio }}</textarea>
                            <span class="error">{{$errors->first('en_bio')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_bio">{{__('lang.team_bio_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_bio" >{{ $team->translate('ar')->bio }}</textarea>
                            <span class="error">{{$errors->first('ar_bio')}}</span>
                        </div>
                    <div class="form-action text-center">
                        <a href="{{route('teams.index')}}" type="reset" name="cancel"
                           class="btn btn-default">@lang('lang.cancel')</a>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>


@endsection


