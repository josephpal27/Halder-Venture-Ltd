<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
  <title>@yield('title', 'Halder Venture Limited | Emerging Leaders in Indian Rice Industry and Related Agro Products')</title>
  <meta name="description" content="@yield('description', 'As a part of the renowned Halder Group, Halder Venture Limited is an emerging leader in Indian rice export, offering a diverse range of quality rice products, edible oils and related agro products.')">
  <meta name="keywords" content="@yield('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')">
  <meta name="google-site-verification" content="@yield('google-site-verification', '9_VJAkv0rxWNnn5-dG9LbSz_LswrarK-uqKA02rjlLg')">
  @include('layouts.partials.styles')
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RMX3MHPGMY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RMX3MHPGMY');
</script>

<body class="no-scroll">
    
    @include('layouts.partials.header')
    @include('layouts.partials.mobile-header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.mobile-footer')
    @include('layouts.partials.scripts')

</body>

</html>