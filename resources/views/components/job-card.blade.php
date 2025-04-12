@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-500">Video Prod</h3>
        <p class="text-sm p-4">Full-time $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="sm" />
            @endforeach

        </div>
        <x-employer-logo :width="42" :height="42" />
    </div>
</x-panel>
