<!DOCTYPE html>
<html lang="ar">
<head>
<!-- Open Graph (تعمل لكل من Facebook, Discord, وغيرها) -->
<meta property="og:title" content="{{ $link->title ?? 'رابط مختصر' }}">
<meta property="og:description" content="{{ $link->description ?? '' }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
@if($link->image ?? false)
<meta property="og:image" content="{{ url(Storage::url($link->image)) }}">
@else
<meta property="og:image" content="{{ asset('default.jpg') }}">
@endif

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $link->title ?? 'رابط مختصر' }}">
<meta name="twitter:description" content="{{ $link->description ?? '' }}">
@if($link->image ?? false)
<meta name="twitter:image" content="{{ url(Storage::url($link->image)) }}">
@else
<meta name="twitter:image" content="{{ asset('default.jpg') }}">
@endif
</head>
<body>
    <p>جارٍ تحويلك إلى <a href="{{ $link->original_url }}">{{ $link->original_url }}</a>...</p>
    <noscript>
        <meta http-equiv="refresh" content="2;url={{ $link->original_url }}">
    </noscript>
    <script>
        window.location.href = "{{ $link->original_url }}";
    </script>
</body>
</html>
