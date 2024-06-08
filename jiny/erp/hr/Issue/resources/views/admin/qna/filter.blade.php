<!-- Filter -->
<div class="row">
    <div class="col-6">
        {{-- Filter1 --}}
        <div class="mb-3 row">
            <label class="col-form-label col-sm-2 text-sm-end">분류코드</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                wire:model="filter.code">
            </div>
        </div>

    </div>
    <div class="col-6">
        {{-- Filter2 --}}
        <div class="mb-3 row">
            <label class="col-form-label col-sm-2 text-sm-end">질문</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                wire:model="filter.question">
            </div>
        </div>
    </div>
</div>

