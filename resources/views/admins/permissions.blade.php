@extends('base_layout._layout')
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
            <br method="post" action="">
                @csrf
                <div class="form-group" style="width:50%; margin-left:23%; margin-right:23%">
                        <label for="role_id" class="panel-title ">{{__('lang.choose_role')}} </label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value=""> {{__('lang.options')}} </option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}"> {{$role->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    </br></br></br></br>
                <div class=" form-group">
                    @foreach($permissions as $permission)
                        <div class="form-group col-lg-3">
                            <label for="permission">
                                <input type="checkbox" class="" name="permissions[]" value="{{$permission->id}}" {{$permission->roles()->find(2)? 'checked' : ''}}>
                                {{$permission->name}}
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
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route("permission_byRole") }}',
                type: 'post',
                data: {
                    'id': role_id
                },
                success: function(data)
                {
                    $('input[type=checkbox]').each(function () {
                        var ThisVal =parseInt(this.value) ;
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
