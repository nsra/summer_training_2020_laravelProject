@extends('base_layout._layout')

@section('body')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-book"></i>{{__('permission.titles.name')}}</h3>
                </div>
                <div class="panel-body">
{{--                    <table class="table table-bordered table-striped table-condensed flip-content">--}}
{{--                        <thead class="flip-content">--}}
{{--                        <tr>--}}
{{--                            <th class="text-center">@lang('permission.fields.name')</th>--}}
{{--                            <th style="text-align: center" class="text-center">@lang('lang.options')</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($permissions as $permission)--}}
{{--                            <tr>--}}
{{--                                <td class="text-center">{{$permission->name}}</td>--}}
{{--                                <td class="text-center">--}}
{{--                                    <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-primary ">--}}
{{--                                        <i class="fa fa-edit"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="{{route('permissions.show', $permission->id)}}" class="btn btn-primary ">--}}
{{--                                        <i class="fa fa-eye"></i>--}}
{{--                                    </a>--}}

{{--                                    <a class="btn btn-danger delete-team" data-value="{{$permission->id}}">--}}
{{--                                        <i class="fa fa-trash"></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}

                        <div class=" form-group">
                            @foreach($permissions as $permission)
                                <div class=" form-group col-lg-3 text-center font-weight-blold">
                                    <label for="permission">
                                        {{$permission->name}}
                                    </label>
                                    <label>
                                        <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-primary ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('permissions.show', $permission->id)}}" class="btn btn-primary ">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a class="btn btn-danger delete-permission" data-value="{{$permission->id}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </label>

                                </div>
                            @endforeach
                        </div>
{{--                        </tbody>--}}
{{--                    </table>--}}


                    <div class="com-md-12 text-right">
                        <br>
                        <br>
                        <br>
                        {{$permissions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.delete-permission').click(function () {
            var id = $(this).data('value')
            swal({
                    title: "@lang('lang.questions.confirm_remove')",
                    text: "@lang('permission.questions.do_remove')",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "@lang('lang.yes')",
                    cancelButtonText: "@lang('lang.no')",
                    closeOnConfirm: false
                },
                function () {
                    /**
                     *
                     * send ajax request for deleting team
                     *
                     */
                    $.ajax({
                        url: '{{route('permission.destroy')}}/' + id,
                        method: 'GET',
                        {{--url: "{{url('/destroy')}}",--}}
                        data: {body: '', _token: '{{csrf_token()}}'}
                    }).success(function (response) {
                        if (response.status == 200) {
                            swal("@lang('lang.alert')", response.message, "success")
                            window.location.reload()
                        } else {
                            swal("@lang('lang.alert')", response.message, "error")
                        }
                    })
                });
        })
    </script>
@endsection

