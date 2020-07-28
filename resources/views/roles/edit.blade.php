@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.edit_role') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{route('roles.update', $role->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')




                        <div class="form-group">
                            <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', optional($role)->name) }}">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>

                </div>

                <div class="form-action text-center">
                    <button type="submit"  class="btn btn-primary">@lang('lang.edit')</button>
                    <a href="{{route('roles.index')}}" type="reset"
                            class="btn btn-default">@lang('lang.cancel')</a>
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

