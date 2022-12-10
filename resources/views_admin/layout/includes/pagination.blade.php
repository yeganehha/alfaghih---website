@if($list->hasPages())
<div class="row">
    <div class="col-xl-12">

        <!--begin:: Components/Pagination/Default-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">

                <!--begin: Pagination-->
                <div class="kt-pagination kt-pagination--brand">
                    <ul class="kt-pagination__links">
                        @if ( $list->currentPage() != 1 )
                            <li class="kt-pagination__link--first">
                                <a href="{{$list->url(1)}}"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
                            </li>
                            <li class="kt-pagination__link--next">
                                <a href="{{ $list->previousPageUrl() }}"><i class="fa fa-angle-left kt-font-brand"></i></a>
                            </li>
                        @endif
                        @if ( $list->currentPage() >  3 )
                            <li>
                                <a href="#">...</a>
                            </li>
                        @endif
                        @if ( $list->currentPage() >  2 )
                            <li>
                                <a href="{{ $list->url($list->currentPage() - 2) }}">{{ $list->currentPage() - 2 }}</a>
                            </li>
                        @endif
                        @if ( $list->currentPage() >  1 )
                            <li>
                                <a href="{{ $list->url($list->currentPage() - 1) }}">{{ $list->currentPage() - 1 }}</a>
                            </li>
                        @endif
                        <li class="kt-pagination__link--active">
                            <a href="#">{{ $list->currentPage() }}</a>
                        </li>
                        @if ( $list->currentPage() + 1 <= $list->lastPage() )
                            <li>
                                <a href="{{ $list->url($list->currentPage() + 1) }}">{{ $list->currentPage() + 1 }}</a>
                            </li>
                        @endif
                        @if ( $list->currentPage() + 2 <= $list->lastPage() )
                            <li>
                                <a href="{{ $list->url($list->currentPage() + 2) }}">{{ $list->currentPage() + 2 }}</a>
                            </li>
                        @endif
                        @if ( $list->currentPage() + 3 <= $list->lastPage() )
                            <li>
                                <a href="{{ $list->url($list->currentPage() + 3) }}">{{ $list->currentPage() +3 }}</a>
                            </li>
                        @endif
                        @if ( $list->currentPage() + 4 <= $list->lastPage() )
                            <li>
                                <a href="#">...</a>
                            </li>
                        @endif
                        @if ( $list->currentPage() < $list->lastPage() )
                            <li class="kt-pagination__link--prev">
                                <a href="{{ $list->nextPageUrl() }}"><i class="fa fa-angle-right kt-font-brand"></i></a>
                            </li>
                            <li class="kt-pagination__link--last">
                                <a href="{{ $list->url($list->lastPage()) }}"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
                            </li>
                        @endif
                    </ul>
                    <div class="kt-pagination__toolbar">
                        <select class="form-control kt-font-brand" id="per_page" style="width: 60px">
                            <option value="10" @selected($list->perPage() == 10) >10</option>
                            <option value="20" @selected($list->perPage() == 20) >20</option>
                            <option value="30" @selected($list->perPage() == 30) >30</option>
                            <option value="50" @selected($list->perPage() == 50) >50</option>
                            <option value="100" @selected($list->perPage() == 100) >100</option>
                        </select>
                        <span class="pagination__desc">
                                {{ trans('pagination' , ['appear' => $list->count() , 'total' => $list->total()]) }}
                            </span>
                    </div>
                </div>

                <!--end: Pagination-->
            </div>
        </div>

        <!--end:: Components/Pagination/Default-->
    </div>
</div>



@section('javascript')
    @parent
    <script>
        $(document).ready(function () {
            $("#per_page").change(function() {
                var $option = $(this).find(':selected');
                window.location.href = "{{$list->url(1)}}&per_page=" + encodeURIComponent($option.val());

            });
        });
    </script>

@stop


@endif
