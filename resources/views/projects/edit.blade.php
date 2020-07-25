@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.edit_project') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> {{__('lang.select_image')}} </span>
                                    <span class="fileinput-exists"> {{__('lang.change')}} </span>
                                    <input type="file" name="project_image" multiple> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{__('lang.remove')}} </a>
                                </div> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="en_title">{{__('lang.project_title_en')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_title" value="{{ old('en_title', optional($project->translate('en'))->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="ar_title">{{__('lang.project_title_ar')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_title" value="{{ old('ar_title', optional($project->translate('ar'))->title) }}">
                        </div>

                        <div class="form-group">
                            <label for="en_description">{{__('lang.project_description_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_description" >{{ old('en_description', optional($project->translate('en'))->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('lang.project_description_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_description" >{{ old('ar_description', optional($project->translate('ar'))->description) }}</textarea>
                        </div>
                        <div class="form-group" style="width:50%; margin-left:23%; margin-right:23%">
                        <label for="project_service_type_id" class="panel-title ">{{__('lang.choose_service_type')}} </label>
                         <select name="project_service_type_id" id="project_service_type_id" class="form-control">
                             <option value=""> {{__('lang.options')}} </option>
                             @foreach($service_types as $service_type)
                                 <option value="{{$service_type->id}}" {{ $service_type->id == $project->service_type_id ? "selected" : "" }}> {{$service_type->name}} </option>
                             @endforeach
                         </select>
                     </div>
                </div>

                <div class="form-action text-center">
                    <button type="submit" class="btn btn-primary">@lang('lang.edit')</button>

                    <button href="{{route('projects.index')}}" type="reset"
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

