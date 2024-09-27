@foreach($rows as $i => $item)
<div class="tab-pane fade @if($i==0) show active @endif" id="{{$item['title']}}-tab-pane" role="tabpanel" aria-labelledby="{{$item['title']}}-tab">
    <div class="d-flex">
        @if(isset($item['items']))
            @includeIf(inSlotPartial("menu.category1.second"),[
                    'ref' => $ref."-".$i,
                    'rows' => $item
            ])
        @endif

        @if($design_mode)
        <div class="flex-fill">
            <x-click wire:click="create('{{$ref}}-{{$i}}')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                </svg>
            </x-click>
        </div>
        @endif

        {{-- 외부정보 _partials 의 blade 삽입 --}}
        @if( isset($item['blade']) && $item['blade'] )
        <div class="flex-fill">
            @includeIf(inSlotPartial($item['blade']))
        </div>
        @endif


    </div>

</div>
@endforeach

