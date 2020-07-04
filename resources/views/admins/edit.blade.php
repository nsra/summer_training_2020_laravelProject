@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.edit_admin') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('admins.update', $admin->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$admin->getImage()}}" alt="">
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> {{__('lang.select_image')}} </span>
                                    <span class="fileinput-exists"> {{__('lang.change')}} </span>
                                    <input type="file" name="admin_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{__('lang.remove')}} </a>
                                    <span class="error col-md-12">{{$errors->first('admin_image')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', optional($admin)->name) }}">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">{{__('lang.email')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="email" value="{{ old('email', optional($admin)->email) }}">
                            <span class="error">{{$errors->first('email')}}</span>
                        </div>




                </div>


                    <div class="form-action text-center">
                        <button type="submit"  class="btn btn-primary">@lang('lang.edit')</button>
                        <button href="{{route('admins.index')}}" type="reset"
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

