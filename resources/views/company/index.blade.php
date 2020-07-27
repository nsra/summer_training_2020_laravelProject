@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.edit_company') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('company.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                    <img src="{{$company->getImage()}}" alt="">
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> {{__('lang.select_image')}} </span>
                                    <span class="fileinput-exists"> {{__('lang.change')}} </span>
                                    <input type="file" name="company_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{__('lang.remove')}} </a>
                                    <span class="error col-md-12">{{$errors->first('company_image')}}</span>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="en_name">{{__('company.fields.name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_name" value="{{ old('en_name', optional($company->translate('en'))->name) }}">
                            <span class="error">{{$errors->first('en_name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="ar_name">{{__('company.fields.name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_name" value="{{ old('ar_name', optional($company->translate('ar'))->name) }}">
                            <span class="error">{{$errors->first('ar_name')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="email">{{__('company.fields.email')}} <span class="required">*</span></label>
                            <input type="email" class="form-control" name="email" value="{{ old('email', optional($company)->email) }}">
                            <span class="error">{{$errors->first('email')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="whatsapp">{{__('company.fields.whatsapp')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp', optional($company)->whatsapp) }}">
                            <span class="error">{{$errors->first('whatsapp')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="en_address">{{__('company.fields.address')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_address" value="{{ old('en_address', optional($company->translate('en'))->address) }}">
                            <span class="error">{{$errors->first('en_address')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="ar_address">{{__('company.fields.address')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_address" value="{{ old('ar_address', optional($company->translate('ar'))->address) }}">
                            <span class="error">{{$errors->first('ar_address')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="en_description">{{__('company.fields.description')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_description" >{{ old('en_description', optional($company->translate('en'))->description) }}</textarea>
                            <span class="error">{{$errors->first('en_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('company.fields.description')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_description" >{{ old('ar_description', optional($company->translate('ar'))->description) }}</textarea>
                            <span class="error">{{$errors->first('ar_description')}}</span>
                        </div>

                        
                        <div class="form-group">
                            <label for="en_footer">{{__('company.fields.footer')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="en_footer" >{{ old('en_footer', optional($company->translate('en'))->footer) }}</textarea>
                            <span class="error">{{$errors->first('en_footer')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_footer">{{__('company.fields.footer')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control" name="ar_footer" >{{ old('ar_footer', optional($company->translate('ar'))->footer) }}</textarea>
                            <span class="error">{{$errors->first('ar_footer')}}</span>
                        </div>



                </div>


                <div class="form-action text-center">
                    <button type="submit"  class="btn btn-primary">@lang('lang.edit')</button>
                    <button href="{{route('company.index')}}" type="reset"
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

