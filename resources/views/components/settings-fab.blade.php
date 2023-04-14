<div class="settings-fab-container" data-bs-theme="{{$theme}}">
    <div class="btn-group dropup">
        <button type="button" class="btn btn-themed " data-bs-toggle="dropdown" aria-expanded="false"
                data-bs-auto-close="outside">
            <x-svg-icon icon="icons/lang" class="settings-icon" size="32px"></x-svg-icon>
        </button>

        <div class="dropdown-menu">
            <div class="list-group list-animate-items list-group-flush py-3 flex-fill">
                <a class="list-group-item list-group-item-action point-up text-uppercase collapsed"
                   data-bs-toggle="collapse" href="#settings-language-menu" role="button"
                   aria-expanded="false" aria-controls="mobile-services-menu">
                    {{ __("Language")  }}

                    <x-svg-icon icon="arrow_top_right" size="18px" class="me-2 ms-0" data-active-direction="up"/>
                </a>

                <div class="collapse" id="settings-language-menu">
                    <div class="list-group list-group-flush border-bottom">
                        @foreach(config("app.validLocales") as $lang)
                            <a href="{{ \App\Providers\GlobalHelperProvider::localizeUrl($lang["code"]) }}"
                               class="list-group-item list-group-item-action text-uppercase">
                                {{ $lang['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
