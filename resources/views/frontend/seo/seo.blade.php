<!-- Title -->
<title>{{ $title ?? $name }} | Brightland Higher Secondary School</title>

@if ($description)
    <!-- Meta Description -->
    <meta name="description" content="{{ $description }}">
@endif

@if ($keyword)
    <!-- Meta Keywords -->
    <meta name="keywords" content="{{ $keyword }}">
@endif

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}" />

@if (!empty($schema))
    <!-- Optional Schema -->
    <script type="application/ld+json">{!! $schema !!}</script>
@endif

<!-- Open Graph Tags for Social Sharing -->
<meta property="og:title" content="{{ $title ?? $name }}" />
<meta property="og:description" content="{{ $description ?? '' }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="article" />

@if (!empty($image))
    <meta property="og:image" content="{{ asset('storage/' . $image) }}" />
    <meta property="og:image:alt" content="{{ $title ?? $name }}" />
@else
    <meta property="og:image" content="{{ asset('frontend/images/logo.jpg') }}" />
    <meta property="og:image:alt" content="Brightland Higher Secondary School" />
@endif

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $title ?? $name }}" />
<meta name="twitter:description" content="{{ $description ?? '' }}" />

@if (!empty($image))
    <meta name="twitter:image" content="{{ asset('storage/' . $image) }}" />
@else
    <meta name="twitter:image" content="{{ asset('frontend/images/logo.jpg') }}" />
@endif
