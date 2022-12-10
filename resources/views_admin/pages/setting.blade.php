@extends('layout.main')
@section('title' , 'Setting' )
@section('content')

    <form action="{{ route('admin:setting.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <i class="fa fa-edit"></i> Basic setting
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Website Name (En)</label>
                                        <input type="text" name="name[en]" value="{{ old('name.en' , setting('name.en') ) }}"
                                               class="form-control @if($errors->has('name.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Website Name (Ar)</label>
                                        <input type="text" dir="rtl" name="name[ar]" value="{{ old('name.ar' , setting('name.ar') ) }}"
                                               class="form-control @if($errors->has('name.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <label class="form-label">Light Logo</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('logo.light')) is-invalid @endif"
                                                   name="logo[light]" value="{{ old('logo.light' , setting('logo.light') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4 bg-dark pt-3">
                                        @if ( setting('logo.light' , false) )
                                            <img src="{{ setting('logo.light') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <label class="form-label">Dark Logo</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('logo.dark')) is-invalid @endif"
                                                   name="logo[dark]" value="{{ old('logo.dark' , setting('logo.dark') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('logo.dark' , false) )
                                            <img src="{{ setting('logo.dark') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                    <div class="col-md-9 mt-2">
                                        <label class="form-label">Website Icon</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @if($errors->has('logo.icon')) is-invalid @endif"
                                                   name="logo[icon]" value="{{ old('logo.icon' , setting('logo.icon') ) }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        onclick="event.preventDefault();window.open('/file-manager/fm-button', 'fm', 'width=900,height=600');fmIdSetLink=$(this).parent().parent().find('input').first();">
                                                    Select
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                        @if ( setting('logo.icon' , false) )
                                            <img src="{{ setting('logo.icon') }}" style="max-width: 100%;">
                                        @endif
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <label class="form-label">SEO Keyword (En)</label>
                                        <input type="text" name="keyword[en]" value="{{ old('keyword.en' , setting('keyword.en') ) }}"
                                               class="form-control @if($errors->has('keyword.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">SEO Keyword (Ar)</label>
                                        <input type="text" dir="rtl" name="keyword[ar]" value="{{ old('keyword.ar' , setting('keyword.ar') ) }}"
                                               class="form-control @if($errors->has('keyword.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">SEO Description (En)</label>
                                        <input type="text" name="description[en]" value="{{ old('description.en' , setting('description.en') ) }}"
                                               class="form-control @if($errors->has('description.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">SEO Description (Ar)</label>
                                        <input type="text" dir="rtl" name="description[ar]" value="{{ old('description.ar' , setting('description.ar') ) }}"
                                               class="form-control @if($errors->has('description.ar')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">Google Analytics Code</label>
                                        <textarea rows="5" name="google_analytics" class="form-control @if($errors->has('google_analytics')) is-invalid @endif">{{ old('google_analytics' , setting('google_analytics') ) }}</textarea>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">Copyright Footer (En)</label>
                                        <input type="text" name="copyright[en]" value="{{ old('copyright.en' , setting('copyright.en') ) }}"
                                               class="form-control @if($errors->has('copyright.en')) is-invalid @endif">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">Copyright Footer (Ar)</label>
                                        <input type="text" dir="rtl" name="copyright[ar]" value="{{ old('copyright.ar' , setting('copyright.ar') ) }}"
                                               class="form-control @if($errors->has('copyright.ar')) is-invalid @endif">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success mt-5" value="Submit">
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
            <div class="col-md-6">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <i class="fa fa-phone"></i> Contact setting
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::Section-->
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Address (En)</label>
                                        <textarea name="address[en]" class="form-control @if($errors->has('address.en')) is-invalid @endif">{{ old('address.en' , setting('address.en') ) }}</textarea>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Address (Ar)</label>
                                        <textarea  name="address[ar]" dir="rtl" class="form-control @if($errors->has('address.ar')) is-invalid @endif">{{ old('address.ar' , setting('address.ar') ) }}</textarea>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label class="form-label">Location</label>
                                        <div id="map" style="width: 100%;height: 250px;border-radius: 5px;"></div>
                                        <input type="hidden" id="location_lat" name="location_lat">
                                        <input type="hidden" id="location_long" name="location_long">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif"
                                               name="email" value="{{ old('email' , setting('email') ) }}">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="form-label">Phone number</label>
                                        <input type="text" class="form-control @if($errors->has('phone')) is-invalid @endif"
                                               name="phone" value="{{ old('phone' , setting('phone') ) }}">
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <h1>Social Links</h1>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Facebook</span></div>
                                                <input placeholder="https://www.facebook.com/YOUR_PAGE" type="text" class="form-control @if($errors->has('social.facebook')) is-invalid @endif"
                                                       name="social[facebook]" value="{{ old('social.facebook' , setting('social.facebook') ) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Instagram</span></div>
                                                <input placeholder="https://www.Instagram.com/YOUR_PAGE" type="text" class="form-control @if($errors->has('social.instagram')) is-invalid @endif"
                                                       name="social[instagram]" value="{{ old('social.instagram' , setting('social.instagram') ) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Twitter</span></div>
                                                <input placeholder="https://www.twitter.com/YOUR_PAGE" type="text" class="form-control @if($errors->has('social.twitter')) is-invalid @endif"
                                                       name="social[twitter]" value="{{ old('social.twitter' , setting('social.twitter') ) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">LinkedIn</span></div>
                                                <input placeholder="https://www.linkedIn.com/YOUR_PAGE" type="text" class="form-control @if($errors->has('social.linkedIn')) is-invalid @endif"
                                                       name="social[linkedIn]" value="{{ old('social.linkedIn' , setting('social.linkedIn') ) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Youtube</span></div>
                                                <input placeholder="https://www.youtube.com/YOUR_PAGE" type="text" class="form-control @if($errors->has('social.youtube')) is-invalid @endif"
                                                       name="social[youtube]" value="{{ old('social.youtube' , setting('social.youtube') ) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success mt-5" value="Submit">
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>

    </form>
@endsection


@section('css')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />

    <style>
        .leaflet-pane {
            z-index: 90 !important;
        }
        .leaflet-top, .leaflet-bottom {
            z-index: 92 !important;
        }
    </style>
@endsection
@section('js')
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script>
        $(document).ready(function () {
            $('#choose-file').change(function () {
                var i = $(this).prev('label').clone();
                var file = $('#choose-file')[0].files[0].name;
                $(this).prev('label').text(file);
            });
        });
        window.onload = function() {
            var map = L.map('map').setView([{{ old('location_lat', setting('location_lat' , 29.303844)  ) }}, {{ old('location_long', setting('location_long' , 47.979262)  ) }}], 12.5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
            var marker = L.marker([{{ old('location_lat', setting('location_lat' , 29.303844) ) }}, {{ old('location_long', setting('location_long' , 47.979262)) }}],{
                draggable: true,
                autoPan: true
            }).addTo(map);

            const options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };
            function success(pos) {
                const crd = pos.coords;
                $('#location_long').val(crd.longitude.toFixed(6));
                $('#location_lat').val(crd.latitude.toFixed(6));
                marker.setLatLng([ crd.latitude, crd.longitude ]);
                map.setView(marker.getLatLng(),map.getZoom());
            }
            function error(err) {
                console.warn(`ERROR(${err.code}): ${err.message}`);
            }
            @if( old('location_lat', setting('location_lat' , null) ) == null  )
            navigator.geolocation.getCurrentPosition(success, error, options);
            @else
            $('#location_long').val({{ old('location_long', setting('location_long' , 47.979262) ) }});
            $('#location_lat').val({{ old('location_lat', setting('location_lat' , 29.303844) ) }});
            @endif
            marker.on("drag", function(e) {
                var marker = e.target;
                var position = marker.getLatLng();
                map.panTo(new L.LatLng(position.lat, position.lng));
                $('#location_long').val(position.lng.toFixed(6));
                $('#location_lat').val(position.lat.toFixed(6));
            });
        };
    </script>

@endsection
