
@foreach($proyeks as $proyek)
    <div class="blog-comments__item d-flex p-3">
    <div class="blog-comments__avatar mr-3">
        @php
            $image = json_decode($proyek->fotos)
        @endphp
        <img src="{{Voyager::image($image[0])}}" alt=""/></div>
    <div class="blog-comments__content">
        <div class="blog-comments__meta text-muted">
            <p class="text-secondary" href="#">{{$proyek->project_name}}</p>
            @isset($proyek->sektor_id)
            <span class="text-muted">– {{$proyek->bySector->name}}</span>
            @endisset
        </div>
        <p class="m-0 my-1 mb-2 text-muted">{{ str_limit($proyek->translate('en')->latar_belakang, $limit = 100, $end = '...') }}</p>
        <div class="blog-comments__actions">
            <div class="btn-group btn-group-sm">
                @if($proyek->market_id == 1)
                    <a href="{{route('detail.proyek', $proyek->id)}}" target="_blank">
                        <button type="button" class="btn btn-white">
                      <span class="text-success">
                        <i class="material-icons">star</i>
                      </span> {{$proyek->marketplace->name}}
                        </button>
                    </a>
                @elseif($proyek->market_id == 2)
                    <a href="{{route('detail.proyek', $proyek->id)}}" target="_blank">
                        <button type="button" class="btn btn-white">
                      <span class="text-danger">
                        <i class="material-icons">star_border</i>
                      </span> {{$proyek->marketplace->name}}
                        </button>
                    </a>
                @else
                    <a href="{{route('detail.proyek', $proyek->id)}}" target="_blank">
                        <button type="button" class="btn btn-white">
                      <span class="text-light">
                        <i class="material-icons">star_half</i>
                      </span> {{$proyek->marketplace->name}}
                        </button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach