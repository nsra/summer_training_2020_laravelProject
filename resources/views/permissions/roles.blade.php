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
            <h3>{{ __('lang.roles') }}</h3>
        </div>
        <div class="card-body">
{{--            <form method="post" action="{{route('get_permissions_by_role')}}">--}}
{{--                @csrf--}}
{{--                <div class="form-group" style="width:50%; margin-left:23%; margin-right:23%">--}}
{{--                        <label for="role_id" class="panel-title ">{{__('lang.choose_role')}} </label>--}}
{{--                        <select name="role_id" id="role_id" class="form-control">--}}
{{--                            <option value=""> {{__('lang.options')}} </option>--}}
{{--                            @foreach($roles as $role)--}}
{{--                                <option value="{{$role->id}}" {{ $role->id == $admin->role_id ? "selected" : "" }}> {{$role->name}} </option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--            </form>--}}


            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('get_permissions_by_role')}}" method="POST">
                            <div class="col-sm-6 form-group">
                                <label for="role_id" class="panel-title ">{{__('lang.choose_role')}} </label>
                                    <select name="role_id" id="role_id" class="form-control">
                                        <option value=""> {{__('lang.options')}} </option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}" {{ $role->id == $admin->role_id ? "selected" : "" }}> {{$role->name}} </option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-sm-6 form-group " style="margin-top:2%">
                                <input type="submit" value="{{trans('lang.select')}}" class="btn btn-primary">

                            </div>

                        </form>
                    </div>

                </div>
            </div>



            <form method="post" action="{{route('update_admin_permissions')}}">
            </br></br></br></br>
                <div class=" form-group">
                    @foreach($roles as $role)
                        <div class="form-group col-lg-3">
                            <label for="role">
                                <input type="checkbox" class="" name="permissions[]" value="{{$role->id}}" {{$role->roles()->find($permission->role_id)? 'checked' : ''}}>
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </br></br>
                <div class="form-action text-center">
                    <input type="submit" class="btn btn-primary" name=""  value="{{__('lang.store')}}" >
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $('#role_id').on('change', function(event){
            var role_id = $(this).val();
            console.log(role_id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route("get_permissions_by_role", ) }}',
                type: 'get',
                data: {
                    'id': role_id
                },
                success: function(data)
                {
                    console.log('done');
                    $('input[type=checkbox]').each(function () {
                        var ThisVal =parseInt(role_id) ;
                        if(data.includes(ThisVal))
                            this.checked = true;
                        else
                            this.checked = false;
                    });
                }
            })
        });
    </script>
@endsection
