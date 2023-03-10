@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('mhoneymoon') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('mhoneymoon') }}" />
@endsection

<x-hanging-gardens-of-bali-mobile>
    <div class="wrapper page">
        <div class="header-page fixed-top">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-1">
                        <a href="{{route('mindex')}}" class="link-dark"><i class="bi bi-chevron-left"></i></a>
                    </div>
                    <div class="col-11 ps-1">
                        <h1>{{$setting->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid activities py-2">
            <div class="row">
                @foreach ($honeymoon_list as $data)
                <div class="col-12">
                    <div class="row gx-1 py-3 @if ($loop->last) @else border-bottom @endif">
                        <div class="col-5">
                            <div class="ratio ratio-1x1">
                                <img src="{{asset('storage/'.$data->banner_image)}}" class="img-fluid" alt="{{$data->title}}">
                            </div>
                        </div>
                        <div class="col-7 ps-2 d-flex flex-column justify-content-between">
                            <div class="title-wrapper">
                                <h2 class="fw-bold mb-2">{{$data->title}}</h2>
                                <p class="mb-3">{!! $data->excerpt !!}</p>
                                @if ($data->price == null)
                                @else
                                <h4 class="mb-0">Prices</h4>
                                @endif
                                <ul class="list-unstyled">
                                    <li>{{$data->price.' '.$data->per}}</li>
                                </ul>
                            </div>
                            <div class="button-wrapper text-end">
                                <button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target="#{{$data->slug}}">View Details</button>
                                <a href="{{$data->button_link}}" class="btn btn-custom">{{$data->button_text}}</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="{{$data->slug}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{$data->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $data->description !!}
                                    </div>
                                    <div class="modal-footer button-wrapper">
                                        <button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal">Close</button>
                                        <a href="{{$data->button_link}}" class="btn btn-custom">{{$data->button_text}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</x-hanging-gardens-of-bali-mobile>