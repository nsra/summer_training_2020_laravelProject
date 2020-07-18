@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('lang.create_permission') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('permissions.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                        <div class="form-group ">
                            <label for="role">@lang('lang.role') </label>
                            <select name="role" id="role" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" {{ $role->name == 'writer' ? "selected" : "" }}> {{$role->name}} </option>
                                @endforeach
                            </select>
                            <span class="error">{{$errors->first('role')}}</span>
                        </div>

                         <div class="form-group">
                                <label for="name">{{__('lang.name')}} <span class="required">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                <span class="error">{{$errors->first('name')}}</span>
                         </div>

                        <div class="form-action " >
                            <button type="submit"  value="" class="btn btn-primary">{{__('lang.store')}}</button>
                            <button type="reset"  value="" class="btn btn-default">{{__('lang.cancel')}}</button>
                        </div>
                    </form>
                </div>
    <br>
    <br>
</div>
</div>
</div>
</div>


@endsection

