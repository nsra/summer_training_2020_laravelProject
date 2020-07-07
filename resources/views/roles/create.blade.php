@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.create_role') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('roles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
{{--                        <div class="form-group">--}}
{{--                            <label for="en_name">{{__('lang.permission_name_en')}} <span class="required">*</span></label>--}}
{{--                            <input type="text" class="form-control" name="en_name" value="{{old('en_name')}}">--}}
{{--                            <span class="error">{{$errors->first('en_name')}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="ar_name">{{__('lang.permission_name_ar')}} <span class="required">*</span></label>--}}
{{--                            <input type="text" class="form-control" name="ar_name" value="{{old('ar_name')}}">--}}
{{--                            <span class="error">{{$errors->first('ar_name')}}</span>--}}
{{--                        </div>--}}

             <div class="form-group">
                    <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="error">{{$errors->first('name')}}</span>
             </div>

                        <div class="form-action " >
                            <button type="submit"  value="" class="btn btn-primary">{{__('lang.store')}}</button>
                            <button type="reset"  value="" class="btn btn-default">{{__('lang.cancel')}}</button>
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

