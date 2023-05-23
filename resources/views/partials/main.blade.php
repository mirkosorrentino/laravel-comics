<main>
    <div class="ms_container">
        <div class="grid d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="col-2 p-3">
                    <img src="{{ $comic['thumb'] }}" alt="" class="ms_thumb">
                    <div class="ms_titles">
                        {{ $comic["series"] }}
                    </div>
                </div>
            @endforeach
            <div class="pt-3">
                <a href=""><div class="load-more-btn main-btns">Load more</div></a>
            </div>
        </div>
    </div>
</main>