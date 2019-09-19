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
            route('home') => ['fas fa-home', 'Home'],
            route('content.base') => ['fas fa-database', 'Bases'],
            route('content.info') => ['fas fa-info', 'Info'],
            route('content.guides') => ['fas fa-book', 'Guides'],
            route('external.telegram') => ['fab fa-telegram-plane', 'Telegram'],
            route('stats') => ['fas fa-chart-area', 'Site Stats'],
            route('about') => ['fas fa-question', 'About'],
        ];

        foreach ($bullets as $url => $name) {
            echo "
            <a href='$url' class='bg-dark list-group-item list-group-item-action'>
                <div class='d-flex w-100 justify-content-start align-items-center'>
                    <span><i class='{$name[0]}' style='width: 20px; text-align: center; margin-right: 5px'></i></span>
                    <span class='menu-collapsed'>  {$name[1]}</span>
                </div>
            </a>";
        }
        @endphp
    </ul>
</div>
