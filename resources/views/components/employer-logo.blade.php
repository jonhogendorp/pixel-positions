@props(['width' => 100, 'height' => 100])
<img src="http://picsum.photos/seed/{{ rand(0, 100000) }}{{ $width }}/{{ $height }}" alt=""
    class="rounded-xl">
