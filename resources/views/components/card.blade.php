@props(['title' => '', 'icon' => '', 'href' => '', 'description' => '', 'price' => '', 'rating' => 0, 'reviews' => 0, 'image' => '', 'badge' => ''])
<article class="card-eco overflow-hidden">
    @if($image)
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover">
    @else
    <div class="w-full h-48 bg-cream/50 flex items-center justify-center text-forest/30"><i class="fas fa-leaf text-4xl"></i></div>
    @endif
    <div class="p-5">
        @if($badge)
        <span class="inline-block px-2 py-0.5 rounded-full text-xs font-semibold bg-sun/20 text-sun-600 mb-2">{{ $badge }}</span>
        @endif
        <h3 class="font-display font-semibold text-forest text-lg mb-1">{{ $title }}</h3>
        @if($description)
        <p class="text-sm text-clay mb-3 line-clamp-2">{{ $description }}</p>
        @endif
        <div class="flex items-center justify-between pt-2 border-t border-earth-200">
            @if($price)
            <span class="font-display font-bold text-leaf text-lg">{{ number_format($price, 2) }} DH</span>
            @endif
            @if($rating)
            <span class="flex items-center gap-1 text-xs text-sun-600">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= floor($rating))<i class="fas fa-star text-sun"></i>
                    @elseif($rating - floor($rating) >= 0.5 && $loop->index == floor($rating))<i class="fas fa-star-half-alt text-sun"></i>
                    @else<i class="far fa-star text-sun/30"></i>@endif
                @endfor
                <span class="text-clay ml-1">{{ number_format($rating, 1) }}</span>
            @endif
        </div>
        @if($href)
        <a href="{{ $href }}" class="mt-3 block text-center btn-eco text-sm">Voir détails</a>
        @endif
    </div>
</article>