@props(['eyebrow' => '', 'title' => '', 'subtitle' => ''])
<section class="bg-sand border-b border-forest/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 text-center">
        @if($eyebrow)<span class="eco-eyebrow mb-4">{{ $eyebrow }}</span>@endif
        <h1 class="font-display text-3xl md:text-5xl font-black text-forest">{{ $title }}</h1>
        @if($subtitle)<p class="mt-4 text-lg text-clay max-w-2xl mx-auto">{{ $subtitle }}</p>@endif
    </div>
</section>