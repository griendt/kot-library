<div class="map-wrapper">
    @if (isset($identifier))
        <strong>{{ str_pad($identifier, 3, "0", STR_PAD_LEFT) }}</strong>
    @endif
    <div class="map-container">
        @foreach ($blocks as $block)
            @if ($block == 0)
            <div class="block block-0"></div>
            @else
                <div class="block block-1"></div>
            @endif
        @endforeach
    </div>
</div>
