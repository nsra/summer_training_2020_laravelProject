{{--@if(!(auth()->user()->can('read permissions')))--}}
{{--    <h1> hh</h1>--}}
{{--@elseif(auth()->user()->can('read permissions'))--}}
{{--@can('read permissions')--}}
@extends('base_layout._layout')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('style')
    <style>
        .permission>li{
            float: right;
            width: 25%;
            height: 160px;
        }
    </style>
@endsection
@section('body')
    <div class="card">
        <div class="card-header">
            <h3>{{ __('lang.permissions') }}</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <h3> @foreach($admin_roles as $admin_role) {{__('lang.role')}}:  {{$admin_role}} @endforeach </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('update_admin_permissions')}}" method="POST">
                            @csrf
                            @foreach($permissions as $permission)
                                <div class="form-group col-lg-3">
                                    <label for="permission">
                                        <input type="checkbox" class="" name="permissions[]" value="{{$permission->name}}" {{in_array( $permission->name, $admin_permissions->toArray()) ? 'checked' : ''}}>
                                        {{$permission->name}}
                                    </label>
                                </div>
                             @endforeach
                                </div>

                                <div class="form-action text-center">
                                    <input type="submit" class="btn btn-primary" name=""  value="{{__('lang.store')}}" >
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
{{--@elsecannot('read permissions')--}}
{{--    <h1>error</h1>--}}
{{--@endcan--}}

