<x-layout>
    <div class="space-y-10">
        <section class="text-center mt-10">
            <h1 class="font-bold text-white text-4xl">Let Find Your Next Job</h1>

            <form class="mt-6" action="">
                <input type="text" placeholder="Search for jobs"
                    class="w-full p-4 mt-6 bg-white/10 border border-white/15 rounded-xl max-w-xl">
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid grid-cols-3  gap-6">
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
            <div class="flex flex-col mt-6 gap-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
