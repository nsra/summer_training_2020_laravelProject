@extends('base_layout._layout')

@section('body')
    <div class="row">
       
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-book"></i>{{__('ad.titles.ads')}}</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content">
                        <tr>
                            <th class="text-center">@lang('ad.fields.title')</th>
                            <th class="text-center">@lang('ad.fields.description')</th>
                            <th class="text-center">@lang('ad.fields.number')</th>
                            <th class="text-center">@lang('ad.fields.button')</th>
                            <th class="text-center">@lang('ad.fields.link')</th>

                            <th style="text-align: center" class="text-center">@lang('lang.options')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td class="text-center">{{$ad->title}}</td>
                                <td class="text-center">{{ \Illuminate\Support\Str::limit($ad->description, 20, '...') }}</td>
                                <td class="text-center">{{$ad->number}}</td>
                                <td class="text-center">{{$ad->button}}</td>
                                <td class="text-center">{{$ad->link}}</td>

                                <td class="text-center">
                                    <a href="{{route('ads.edit', $ad->id)}}" class="btn btn-primary ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('ads.show', $ad->id)}}" class="btn btn-primary ">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a class="btn btn-danger delete-ad" data-value="{{$ad->ad_id}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="com-md-12 text-right">
                        {{$ads->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.delete-ad').click(function () {
            var id = $(this).data('value')
            swal({
                    title: "@lang('lang.questions.confirm_remove')",
                    text: "@lang('ad.questions.do_remove')",
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
                     * send ajax request for deleting ad
                     *
                     */
                    $.ajax({
                        url: '{{ route('ad.destroy')}}/' + id ,
                        method: 'GET',
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