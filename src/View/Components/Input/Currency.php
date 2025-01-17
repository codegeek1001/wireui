<?php

namespace WireUi\View\Components\Input;

use Illuminate\Contracts\View\View;
use WireUi\Traits\Components\IsFormComponent;
use WireUi\Traits\Components\{HasSetupColor, HasSetupRounded};
use WireUi\View\Components\WireUiComponent;

class Currency extends WireUiComponent
{
    use HasSetupColor;
    use HasSetupRounded;
    use IsFormComponent;

    protected array $packs = ['shadow'];

    protected array $props = [
        'decimal'        => '.',
        'precision'      => 2,
        'thousands'      => ',',
        'shadowless'     => false,
        'emit-formatted' => false,
    ];

    protected function blade(): View
    {
        return view('wireui::components.input.currency');
    }
}
