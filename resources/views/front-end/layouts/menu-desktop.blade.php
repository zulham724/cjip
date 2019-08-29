<ul style="margin: 0 auto;">

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

        @guest('investor')
            <li><a class="site-btn site-btn--accent" href="{{ route('show.login')  }}">Login</a></li>
        @else

                <li>
                    <div class="menu__logo">
                        <div class="believe">
                            <a href="{{route('dashboard.investor', Auth::guard('investor')->user()->id)}}">
                                <img alt="{{Auth::guard('investor')->user()->name}}" class="believe__avatar" src="{{Auth::guard('investor')->user()->image}}"/>
                            </a>
                        </div>
                    </div>

                    <div>
                        <a class="link link--gray link--gray-active" href="{{route('dashboard.investor', Auth::guard('investor')->user()->id)}}" >
                            <span style="color: #0e3a78; font-weight: 500;  font-family: Bahnschrift">PROFILE</span></a>
                        |
                        <a class="link link--gray link--gray-active" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

        @endguest
</ul>
