<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MetaTags extends Component
{
    public $metaTitle;
    public $metaDescription;
    public $metaImage;
    public $metaCanonical;
    public $metaOpenGraph;
    public $metaTwitter;

    public function __construct(
        $metaTitle = null,
        $metaDescription = null,
        $metaImage = null,
        $metaCanonical = null,
        $metaOpenGraph = [],
        $metaTwitter = []
    ) {
        // Set default meta values or use passed values
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
        $this->metaImage = $metaImage;
        $this->metaCanonical = $metaCanonical;
        $this->metaOpenGraph = $metaOpenGraph;
        $this->metaTwitter = $metaTwitter;
    }

    public function render()
    {
        return view('components.meta-tags');
    }
}
