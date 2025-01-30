<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<link rel="canonical" href="{{ $metaCanonical }}">

<!-- Open Graph Meta Tags -->
@foreach($metaOpenGraph as $property => $content)
    <meta property="{{ $property }}" content="{{ $content }}">
@endforeach

<!-- Twitter Meta Tags -->
@foreach($metaTwitter as $name => $content)
    <meta name="{{ $name }}" content="{{ $content }}">
@endforeach
