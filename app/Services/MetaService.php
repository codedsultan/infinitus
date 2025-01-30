<?php

namespace App\Services;

namespace App\Services;

use Illuminate\Support\Facades\Route;

class MetaService
{
    protected $defaultTitle;
    protected $defaultDescription;
    protected $defaultImage;
    protected $defaultCanonical;

    public function __construct()
    {
        $this->defaultTitle = config('app.name');
        $this->defaultDescription = 'Welcome to ' . config('app.name') . '. Discover amazing content!';
        $this->defaultImage = asset('default-image.jpg');  // Set default image path
        $this->defaultCanonical = url()->current();  // Default canonical URL
    }

    /**
     * Generate meta tags for a given post or page.
     *
     * @param string|null $title
     * @param string|null $description
     * @param string|null $image
     * @param string|null $canonical
     * @param string $type
     * @return array
     */
    public function generateMeta(
        $title = null,
        $description = null,
        $image = null,
        $canonical = null,
        $type = 'website'
    )
    {
        // Fallback to default values if no post data is provided
        $metaTitle = $title ?? $this->defaultTitle;
        $metaDescription = $description ?? $this->defaultDescription;
        $metaImage = $image ?? $this->defaultImage;
        $metaCanonical = $canonical ?? $this->defaultCanonical;

        // Open Graph meta tags
        $openGraphMeta = [
            'og:title' => $metaTitle,
            'og:description' => $metaDescription,
            'og:image' => $metaImage,
            'og:url' => $metaCanonical,
            'og:type' => $type,
        ];

        // Twitter meta tags
        $twitterMeta = [
            'twitter:title' => $metaTitle,
            'twitter:description' => $metaDescription,
            'twitter:image' => $metaImage,
        ];

        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaImage' => $metaImage,
            'metaCanonical' => $metaCanonical,
            'metaOpenGraph' => $openGraphMeta,
            'metaTwitter' => $twitterMeta,
        ];
    }
}
