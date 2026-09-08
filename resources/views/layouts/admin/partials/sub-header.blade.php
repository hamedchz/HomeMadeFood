<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $title }}</h5>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                @if (count($items) > 0)
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        @foreach ($items as $item)
                            <li class="breadcrumb-item text-muted">
                                @if (isset($item['url']))
                                    <a href="{{ $item['url'] }}" class="text-muted">{{ $item['text'] }}</a>
                                @else
                                    {{ $item['text'] }}
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
                <!--end::Breadcrumb-->
            </div>
        </div>
    </div>
</div>
