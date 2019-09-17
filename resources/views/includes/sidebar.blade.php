<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
    <!-- Bootstrap List Group -->
    <ul class="list-group">
        <a
            href="#"
            data-toggle="sidebar-collapse"
            class="bg-dark list-group-item list-group-item-action d-flex align-items-center"
        >
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span id="collapse-icon" class="fa"></span>
            </div>
        </a>

        @php
        $bullets = [
            route('home') => 'Home',
            route('content.base') => 'Bases',
            route('content.info') => 'Info',
            route('content.guides') => 'Guides',
            route('external.telegram') => 'Telegram',
            route('stats') => 'Site Stats',
            route('about') => 'About',
        ];

        foreach ($bullets as $url => $name) {
            echo "
            <a href='$url' class='bg-dark list-group-item list-group-item-action'>
                <div class='d-flex w-100 justify-content-start align-items-center'>
                    <span class='menu-collapsed'>$name</span>
                </div>
            </a>";
        }
        @endphp
    </ul>
</div>
