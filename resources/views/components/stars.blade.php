@php
$note = round((float) ($note ?? 0), 1);
$full = (int) floor($note);
$half = ($note - $full) >= 0.5;
@endphp
<span class="inline-flex items-center gap-1" title="{{ $note }}/5">
    @for($i = 1; $i <= 5; $i++)
        @if($i <= $full)
        <i class="fas fa-star text-sun text-sm"></i>
        @elseif($i === $full + 1 && $half)
        <i class="fas fa-star-half-alt text-sun text-sm"></i>
        @else
        <i class="far fa-star text-sun text-sm"></i>
        @endif
    @endfor
    @if(isset($count))
    <span class="text-xs text-gray-500 ml-1">{{ $note }} ({{ $count }} avis)</span>
    @endif
</span>
