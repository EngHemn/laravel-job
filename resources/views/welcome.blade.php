<x-layout>
    <x-slot:header>Welcome</x-slot:header>

    <div class="space-y-10">
        <!-- Hero Banner -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-cyan-600 via-cyan-700 to-slate-900 px-6 py-12 text-white shadow-lg sm:px-12 sm:py-16">
            <div class="max-w-2xl space-y-4">
                <span class="inline-flex items-center rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-cyan-100 backdrop-blur-xs">
                    {{ $greeting }}
                </span>
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                    Find your next career opportunity today.
                </h2>
                <p class="text-base text-cyan-100 sm:text-lg">
                    Browse curated roles from top employers or post a new position in seconds.
                </p>
                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="/jobs"
                        class="inline-flex items-center rounded-lg bg-white px-5 py-2.5 text-sm font-semibold text-cyan-700 shadow-sm transition hover:bg-cyan-50">
                        Browse All Jobs
                    </a>
                    <a href="/jobs/create"
                        class="inline-flex items-center rounded-lg border border-white/30 bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-xs transition hover:bg-white/20">
                        Post a Job
                    </a>
                </div>
            </div>
        </div>

        <!-- Latest Jobs Preview -->
        @if (isset($jobs) && count($jobs) > 0)
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-slate-900">Recent Openings ({{ count($jobs) }})</h3>
                    <a href="/jobs" class="text-sm font-semibold text-cyan-600 hover:text-cyan-700">
                        View all &rarr;
                    </a>
                </div>

                <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($jobs->take(6) as $job)
                        <li>
                            <a href="/job/{{ $job['id'] }}"
                                class="group block h-full rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition hover:-translate-y-0.5 hover:border-cyan-300 hover:shadow-md">
                                <div class="flex items-start justify-between gap-2">
                                    <span class="inline-flex items-center rounded-md bg-cyan-50 px-2.5 py-1 text-xs font-medium text-cyan-700">
                                        {{ $job['company'] }}
                                    </span>
                                    <span class="text-xs text-slate-400">{{ $job['date'] }}</span>
                                </div>
                                <h4 class="mt-3 text-base font-bold text-slate-900 group-hover:text-cyan-600">
                                    {{ $job['title'] }}
                                </h4>
                                <p class="mt-2 text-sm font-semibold text-emerald-600">
                                    ${{ number_format((float) $job['salary']) }} / yr
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-layout>
