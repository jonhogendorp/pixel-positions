<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid grid-cols-3 gap-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex mt-6 space-x-1 gap-2">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>
    </div>
</x-layout>
