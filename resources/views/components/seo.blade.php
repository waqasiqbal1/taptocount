@props(['title', 'description', 'url', 'image' => null])

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}" />
<link rel="canonical" href="{{ $url }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:url" content="{{ $url }}" />
@if ($image)
<meta property="og:image" content="{{ $image }}" />
@endif
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content="{{ $description }}" />
@if ($image)
<meta name="twitter:image" content="{{ $image }}" />
@endif
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Tally Counter",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceSpecification": {
      "@type": "PriceSpecification",
      "price": 0,
      "priceCurrency": "USD"
    }
  },
  "description": "Free online tally counter with multiple counters, dark mode, localStorage saving, and no login required.",
  "featureList": [
    "Online tally counter",
    "Digital counter",
    "Multiple counters",
    "Tap to count",
    "+ and - buttons",
    "Dark mode",
    "No login required",
    "Local counter saving"
  ],
  "url": "{{ $url }}"
}
</script>
