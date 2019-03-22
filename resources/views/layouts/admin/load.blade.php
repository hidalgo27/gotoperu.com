
<div class="col">
    <h4>Itinerary</h4>
    <hr>
    @php $i = 1; @endphp
    @foreach($itinerario->sortBy('dia') as $itinerary)
        <div class="row mb-3">
            <div class="col">
                <select class="selectpicker" data-width="100%" name="itinerary_{{$i}}">
                    @foreach($itinerario_full->where('dia', $itinerary->dia) as $itinerary_full)
                        <option value="{{$itinerary_full->id}}-{{$itinerary->id}}">Day {{$itinerary_full->dia}}: {{ucwords(strtolower($itinerary_full->titulo))}}
                    @endforeach
                </select>
                <div class="p-2 small shadow-sm mt-2">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" id="resumen_{{$itinerary->id}}">
                                @php echo $itinerary->resumen; @endphp
                            </div>
                        </div>
                        <!-- Add Scroll Bar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
        @php $i++; @endphp
    @endforeach

    <script>
        $('select').on('change', function () {
            // var duration = $('#duration_slc').val();
            var $id_itinerary = this.value;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax( {
                type: "POST",
                url: "{{route('admin_package_duration_path')}}",
                data: {id_itinerary: $id_itinerary},
                success: function( response ) {
                    // console.log( $id );
                    $("#resumen_"+response.id).html(response.resumen);
                }
            } );
        });
        var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });
        $('select').selectpicker();
    </script>
</div>
