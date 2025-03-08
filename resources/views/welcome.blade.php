<x-layout>
    <h1>Welcome to Laravel</h1>
    <p>This is the content of the welcome page.</p>
    <section>
        <h3 class="mb-6">Top Jobs</h3>
        <div class="grid grid-cols-3 gap-6">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>
    </section>
</x-layout>
