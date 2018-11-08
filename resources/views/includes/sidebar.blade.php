<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Library</h3>
    </div>

    <ul class="ul-sidebar list-unstyled components">
        {{--<p>Dummy Heading</p>--}}
        @php
            $bullets = [
                route('home') => 'Home',
                route('content.base') => 'Bases & Layouts',
                route('content.info') => 'Game Information',
//                route('content.pattern') => 'Patterns',
//                '/content/saw' => 'Saw Jumps',
//                '/content/game' => 'Game Information',
//                '/external/forum' => 'Forum Threads',
//                '/external/chats' => 'Telegram Chats',
                route('stats') => 'Site Stats',
                route('about') => 'About',
        ];
        foreach ($bullets as $url => $name) {
            echo "<li><a href='$url'>$name</a></li>";
        }
        @endphp
    </ul>
</nav>
