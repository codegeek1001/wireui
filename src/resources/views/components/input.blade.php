@php($attrs = $attributes)

<x-inputs.wrapper
     :data="$wrapperData"
     :attributes="$attrs->only(['wire:key', 'x-data'])"
>
    @include('wireui::form.wrapper.slots')

    <x-wireui::inputs.element :attributes="$attrs->except(['wire:key', 'x-data'])" />
</x-inputs.wrapper>