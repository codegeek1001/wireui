<?php

namespace WireUi\Support; // todo: move to View namespace

use Illuminate\View\ComponentAttributeBag;

class ComponentAttributesBag extends ComponentAttributeBag
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->attributes = collect($attributes)
            ->filter()
            ->mapWithKeys(static function ($value, string $key): array {
                if (is_bool($value)) {
                    $value = $value ? 'true' : 'false';
                }

                return [$key => $value];
            })
            ->toArray();
    }
}
