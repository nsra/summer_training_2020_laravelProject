@extends('base_layout._layout')
@section('breadcrumb')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{route('user.index')}}">user names</a>
                <i class="fa fa-circle"></i>
            </li>

        </ul>
    </div>
@endsection
@section('body')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-primary">

            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
{{--                    <h3 class="panel-title"><i class="fa fa-book"></i>@lang('category.titles.categories')</h3>--}}
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
{{--                            <th class="text-center">@lang('category.fields.name')</th>--}}
{{--                            <th class="text-center">@lang('category.fields.language')</th>--}}
{{--                            <th style="text-align: center" class="text-center">@lang('lang.options')</th>--}}
                            <th class="text-center">name</th>
                            <th class="text-center">email</th>
                            <th style="text-align: center" class="text-center">options</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{$user->name}}</td>

                                {{--                                <td class="text-center">{{$category->getLang()}}</td>--}}
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">
{{--                                    <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-primary ">--}}
{{--                                        <i class="fa fa-edit"></i>--}}
{{--                                    </a>--}}
                                    <a href="#" class="btn btn-primary ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger"
                                       data-value="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="com-md-12 text-right">
{{--                        {{$users->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
{{--    <script>--}}
{{--        $('.delete-category').click(function () {--}}
{{--            var id = $(this).data('value')--}}
{{--            swal({--}}
{{--                    title: "@lang('lang.questions.confirm_remove')",--}}
{{--                    text: "@lang('category.questions.do_remove')",--}}
{{--                    type: "warning",--}}
{{--                    showCancelButton: true,--}}
{{--                    confirmButtonClass: "btn-danger",--}}
{{--                    confirmButtonText: "@lang('lang.yes')",--}}
{{--                    cancelButtonText: "@lang('lang.no')",--}}
{{--                    closeOnConfirm: false--}}
{{--                },--}}
{{--                function () {--}}

{{--                    /**--}}
{{--                     *--}}
{{--                     * send ajax request for deleting category--}}
{{--                     *--}}
{{--                     */--}}
{{--                    $.ajax({--}}
{{--                        url: '{{route('category.destroy')}}/' + id,--}}
{{--                        method: 'GET',--}}
{{--                        data: {body: '', _token: '{{csrf_token()}}'}--}}
{{--                    }).success(function (response) {--}}
{{--                        if (response.status == 200) {--}}
{{--                            swal("@lang('lang.alert')", response.message, "success")--}}
{{--                            window.location.reload()--}}
{{--                        } else {--}}
{{--                            swal("@lang('lang.alert')", response.message, "error")--}}
{{--                        }--}}
{{--                    })--}}

{{--                });--}}

{{--        })--}}

{{--    </script>--}}
@endsection
