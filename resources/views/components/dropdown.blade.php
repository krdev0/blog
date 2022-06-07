@props(['trigger'])
<div x-data="{open: false}" class="relative" @click.away="open = false">
    {{--  Trigger  --}}
    <div @click="open = !open">
        {{$trigger}}
    </div>

    {{--  Dropdown  --}}
    <div x-show="open" class="absolute w-full bg-gray-100 mt-1 rounded-xl z-50" style="display:none;">
        {{$slot}}
    </div>
</div>
