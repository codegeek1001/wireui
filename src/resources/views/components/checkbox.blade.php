<x-wrapper.switcher
    :data="$wrapperData"
    :attributes="$attrs->only(['wire:key'])"
>
    @include('wireui::components.wrapper.slots')

    <input
        {{ $attrs
            ->class([
                'form-checkbox transition ease-in-out duration-100',
                $roundedClasses,
                $colorClasses,
                $sizeClasses,

                'invalidated:focus:ring-negative-500 invalidated:ring-negative-500 invalidated:border-negative-400 invalidated:text-negative-600',
                'invalidated:focus:border-negative-400 invalidated:dark:focus:border-negative-600 invalidated:dark:ring-negative-600',
                'invalidated:dark:border-negative-600 invalidated:dark:bg-negative-700 invalidated:dark:checked:bg-negative-700',
                'invalidated:dark:focus:ring-offset-secondary-800 invalidated:dark:checked:border-negative-700',
            ])
            ->merge(['type' => 'checkbox'])
        }}
    />
</x-wrapper.switcher>
