<header>
    <div class="ms_container d-flex align-items-center justify-content-between">
        <div>
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </div>
        <ul class="d-flex align-items-center justify-content-between ms_navbar">
            @foreach ($navlist as $navitem)
            <li><a href="{{ route($navitem['link']) }}">{{ $navitem["name"] }}</a></li>
            @endforeach
        </ul>
        <div class="ms_input">
            <input type="text">
        </div>
    </div>
</header>