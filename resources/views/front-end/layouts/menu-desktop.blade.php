<ul>

    @foreach($items as $item)

        @if($item->children->count() == null)
            <li>
                <a href="{{url($item->url)}}" class="link link--gray">
                    {{$item->title}}
                </a>
            </li>

        @else
            <li>
                <div class="menu__dropdown">
                    <a target="{{ $item->target }}" href="{{ url($item->url) }}" data-toggle="dropdown" class="link link--gray menu__dropdown-btn">
                        {{ $item->title }}
                        <span><i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    @if($item->children->count())
                        <div class="menu__dropdown-content">
                            @foreach($item->children as $subItem)
                                <a class="link link--gray" target="{{ $subItem->target }}" href="{{ url($subItem->url) }}">{{ $subItem->title }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </li>
        @endif
    @endforeach

</ul>
