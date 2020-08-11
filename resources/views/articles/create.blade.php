@extends('base_layout._layout')

@section('body')
    <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.create_article') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group " style="text-align: center">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> {{__('lang.select_image')}} </span>
                                    <span class="fileinput-exists"> {{__('lang.change')}} </span>
                                    <input type="file" name="article_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{__('lang.remove')}} </a>
                                    <span class="error col-md-12">{{$errors->first('article_image')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="en_title">{{__('lang.article_title_en')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="en_title" value="{{old('en_title')}}">
                            <span class="error">{{$errors->first('en_title')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_title">{{__('lang.article_title_ar')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="ar_title" value="{{old('ar_title')}}">
                            <span class="error">{{$errors->first('ar_title')}}</span>
                        </div>

                        <div class="form-group">
                            <label for="en_description">{{__('lang.article_description_en')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control " name="en_description" >{{old('en_description')}}</textarea>
                            <span class="error">{{$errors->first('en_description')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="ar_description">{{__('lang.article_description_ar')}} <span class="required">*</span></label>
                            <textarea type="text" class="form-control " name="ar_description" >{{old('ar_description')}}</textarea>
                            <span class="error">{{$errors->first('ar_description')}}</span>
                        </div>

                        <div class="form-action " >
                            <button type="submit"  value="" class="btn btn-primary">{{__('lang.store')}}</button>
                            <button type="reset"  value="" class="btn btn-default">{{__('lang.cancel')}}</button>
                        </div>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
     </div>


@endsection


