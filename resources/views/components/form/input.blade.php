@props(['name', 'placeholder' => '', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{$name}}"/>

    <input class="border border-gray-300 p-2 w-full rounded-xl"
           name="{{$name}}"
           id="{{$name}}"
           type="{{$type}}"
           placeholder="{{$placeholder}}"
           {{$attributes(['value' => old($name)])}}
    >

    <x-form.error name="{{$name}}"/>
</x-form.field>


