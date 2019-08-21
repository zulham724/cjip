<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
            {!! __('voyager::theme.footer_copyright') !!} <a href="http://www.wdnsds.com/" target="_blank">{{Voyager::setting('admin.footer')}}</a>
        @endif
        @php $version = 2.0; @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
