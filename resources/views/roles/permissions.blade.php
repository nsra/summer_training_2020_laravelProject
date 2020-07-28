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

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                                <h3 class="text-center">{{__('role.titles.roles')}}: {{$role->name}}</h3>
                            </div>

                    </div>

                </div>
            </div>

            <form action="{{route('update_permissions')}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" form-group">
                    <input type="hidden" value="{{$role->id}}" name="role_id"/>
                    @foreach($permissions as $permission)
                        <div class="form-group col-lg-3">
                            <label for="permission">
                                <input type="checkbox" class="" name="permissions[]" value="{{$permission->id}}" {{$permission->roles()->find($role->id)? 'checked' : ''}}>
                                {{$permission->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
                </br></br>
                <div class="form-action text-center">
                    <input type="submit" class="btn btn-primary" name=""  value="{{__('lang.edit')}}" >
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')

 
@endsection
