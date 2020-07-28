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
                        <form action="{{route('update_admin_permissions')}}" method="POST">
                            @csrf
                            <div class="col-sm-6 form-group">
                                <label for="role_id" class="panel-title ">{{__('lang.choose_role')}} </label>
                                    <select name="role_id" id="role_id" class="form-control">
                                        <option value=""> {{__('lang.options')}} </option>
                                        @foreach($admin_roles as $admin_roles)
                                            <option value="{{$admin_roles}}" selected> {{$admin_roles}} </option>

                                        @endforeach
                                    </select>
                            </div>


                            </br></br></br></br>
                                <div class=" form-group">
                                    @foreach($admin_permissions as $admin_permission)

                                        <div class="form-group col-lg-3">
                                            <label for="permission">
                                                <input type="checkbox" class="" name="permissions[]" value="{{$admin_permission}}" checked>

                                                {{$admin_permission}}
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
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $('#role_id').on('change', function(event){
            var role_id = $(this).val();
            // console.log(role_id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route("get_permissions_by_role", ) }}',
                type: 'post',
                data: {
                    'id': role_id
                },
                success: function(data)
                {
                    // console.log('done');
                    $('input[type=checkbox]').each(function () {
                        var ThisVal =parseInt(this.value);
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
