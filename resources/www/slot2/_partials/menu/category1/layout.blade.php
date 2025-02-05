<div class="navbar-nav">
    <div class="dropdown position-static pb-lg-2">
        <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown"
            data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
            <i class="ci-menu fs-lg me-2"></i>
            <span class="animate-target">
                Categories
            </span>
        </button>
        <div class="dropdown-menu w-100 p-4 px-xl-5" style="--cz-dropdown-spacer: .75rem">

            @includeIf(inSlotPartial('menu.category1.tab'), [
                'ref' => '0',
                'rows' => $rows['items'],
            ])

            <!-- Tab panes -->
            <div class="tab-content pb-xl-4">
                @includeIf(inSlotPartial('menu.category1.content'), [
                    'ref' => '',
                    'rows' => $rows['items'],
                ])
            </div>

        </div>
    </div>
</div>
