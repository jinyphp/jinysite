<!-- Filter -->
<div class="row">
    <div class="col-6">
        {{-- Filter1 --}}
        <div class="mb-3 row">
            <label class="col-form-label col-sm-2 text-sm-end">부서</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                wire:model="filter.division">
            </div>
        </div>

    </div>
    <div class="col-6">
        {{-- Filter2 --}}
        <div class="mb-3 row">
            <label class="col-form-label col-sm-2 text-sm-end">제목</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                wire:model="filter.title">
            </div>
        </div>
    </div>
</div>

