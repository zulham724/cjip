
@foreach($items as $item)

    @if($item->children->count() == null)
        <li class="mobile-menu__li">
            <a href="{{url($item->url)}}" class="link link--gray">
                {{$item->title}}
            </a>
        </li>

    @else
        <li class="mobile-menu__li mobile-menu__li-collapse mobile-menu__li-collapse--close">
            <a data-toggle="dropdown" class="link link--dark-gray">
                {{ $item->title }}
                <span><i class="mdi mdi-chevron-down"></i></span>
            </a>
        </li>
        @if($item->children->count())

            <li class="mobile-menu__ul--collapsed">
                <ul class="mobile-menu__ul">
                    @foreach($item->children as $subItem)
                        <li class="mobile-menu__li">
                            <a class="link link--gray" target="{{ $subItem->target }}" href="{{ url($subItem->url) }}">{{ $subItem->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif

    @endif

@endforeach

