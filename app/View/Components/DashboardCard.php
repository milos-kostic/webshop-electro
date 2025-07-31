<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardCard extends Component
{
    public string $href;
    public string $color;
    public string $icon;
    public string $title;
    public bool $disabled;
    public ?string $count;
    public ?string $description;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $href = '#',
        string $color = 'blue',
        string $icon = '',
        string $title = '',
        bool $disabled = false,
        ?string $count = null,
        ?string $description = null
    ) {
        $this->href = $href;
        $this->color = $color;
        $this->icon = $icon;
        $this->title = $title;
        $this->disabled = $disabled;
        $this->count = $count;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.dashboard-card');
    }
}
