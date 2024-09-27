<div class="accordion" id="footerLinks">
    <div class="row row-cols-1 row-cols-sm-3">

        @foreach(\Jiny\Site\MenuItems("footer.json") as $item)
        <div class="accordion-item col border-0">
            <h6 class="accordion-header" id="categoriesHeading">
                <span class="text-dark-emphasis d-none d-sm-block">
                    {{$item['title']}}
                </span>
                <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse"
                    data-bs-target="#categoriesLinks" aria-expanded="false"
                    aria-controls="categoriesLinks">
                    {{$item['title']}}
                </button>
            </h6>
            <div class="accordion-collapse collapse d-sm-block" id="categoriesLinks" aria-labelledby="categoriesHeading"
                data-bs-parent="#footerLinks">
                <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                    @foreach($item['items'] as $subitem)
                    <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                            href="javascript:void(0);">
                            {{$subitem['title']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <hr class="d-sm-none my-0">
        </div>
        @endforeach

    </div>
</div>
