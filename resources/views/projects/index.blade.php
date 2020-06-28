@extends('base_layout._layout')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-search"></i>@lang('lang.search')</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('projects.index')}}" method="GET">
                                <div class="col-sm-4 form-group">
                                    <label for="name">@lang('project.fields.title')</label>
                                    <input type="text" name="title" class="form-control"
                                           value="{{app('request')->get('title')}}">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="description">@lang('project.fields.description')</label>
                                    <input type="text" name="description" class="form-control"
                                           value="{{app('request')->get('description')}}">
                                </div>

                                <div class="col-sm-4 form-group">
                                    <label for="user_id">@lang('project.fields.service_type_id')</label>
                                    <input type="text" name="service_type_id" class="form-control"
                                           value="{{app('request')->get('service_type_id')}}">
                                </div>
                                <div class="form-action col-sm-12 text-right">
                                    <input type="submit" value="{{trans('lang.search')}}" class="btn btn-primary">
                                    <a class="btn btn-default"
                                       href="{{route('projects.index')}}">@lang('lang.cancel')</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                           <h3 class="panel-title"><i class="fa fa-book"></i>{{__('project.titles.projects')}}</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th class="text-center">@lang('project.fields.title')</th>
                            <th class="text-center">@lang('project.fields.description')</th>
                            <th class="text-center">@lang('project.fields.service_type_id')</th>
                            <th style="text-align: center" class="text-center">@lang('lang.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td class="text-center">{{$project->title}}</td>
                                <td class="text-center">{{$project->description}}</td>
                                <td class="text-center">
                                    {{$project->service_type_id}}
                                </td>
                                <td class="text-center">
                                    <a href="{{route('projects.edit', $project->id)}}" class="btn btn-primary ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('projects.show', $project->id)}}" class="btn btn-primary ">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a class="btn btn-danger delete-project" data-value="{{$project->id}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="com-md-12 text-right">
{{--                                                {{$projects->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
        <script>
            $('.delete-project').click(function () {
                var id = $(this).data('value')
                swal({
                        title: "@lang('lang.questions.confirm_remove')",
                        text: "@lang('project.questions.do_remove')",
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
                         * send ajax request for deleting project
                         *
                         */
                        $.ajax({
                            url: '{{route('project.destroy')}}/' + id,
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
