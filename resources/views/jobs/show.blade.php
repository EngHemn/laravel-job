<x-layout>
     <x-slot:header>{{ $job['title'] }}</x-slot:header>

     <div class="mx-auto max-w-3xl space-y-6">
          <div class="flex items-center justify-between">
               <a href="/jobs"
                    class="inline-flex items-center gap-1.5 text-sm font-medium text-slate-600 transition hover:text-cyan-600">
                    &larr; Back to all jobs
               </a>
               <form method="POST" action="/jobs/{{ $job['id'] }}"
                    onsubmit="return confirm('Are you sure you want to delete this job?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                         class="inline-flex items-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-xs transition hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 cursor-pointer">
                         Delete Job
                    </button>
               </form>
               <a href="/job/{{ $job['id'] }}/edit"
                    class="inline-flex items-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-xs transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">
                    Edit Job
               </a>
          </div>

          <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xs">
               <div class="border-b border-slate-100 bg-slate-50/60 px-6 py-5 sm:px-8">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                         <div>
                              <span
                                   class="inline-flex items-center rounded-md bg-cyan-50 px-2.5 py-1 text-xs font-semibold text-cyan-700">
                                   {{ $job['company'] }}
                              </span>
                              <h2 class="mt-2 text-2xl font-bold text-slate-900">{{ $job['title'] }}</h2>
                         </div>
                         <div class="rounded-xl bg-emerald-50 px-4 py-2 text-right">
                              <span class="block text-xs font-medium text-emerald-600">Annual Salary</span>
                              <span class="text-lg font-bold text-emerald-700">
                                   ${{ is_numeric($job['salary']) ? number_format((float) $job['salary']) : $job['salary'] }}
                              </span>
                         </div>
                    </div>
               </div>

               <div class="px-6 py-6 sm:px-8">
                    <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                         <div class="rounded-xl border border-slate-100 bg-slate-50/50 p-4">
                              <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Company</dt>
                              <dd class="mt-1 text-base font-semibold text-slate-900">{{ $job['company'] }}</dd>
                         </div>

                         <div class="rounded-xl border border-slate-100 bg-slate-50/50 p-4">
                              <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Posted Date</dt>
                              <dd class="mt-1 text-base font-semibold text-slate-900">{{ $job['date'] }}</dd>
                         </div>

                         @if ($job->employe)
                              <div class="rounded-xl border border-slate-100 bg-slate-50/50 p-4 sm:col-span-2">
                                   <dt class="text-xs font-medium uppercase tracking-wider text-slate-400">Employer</dt>
                                   <dd class="mt-1 text-base font-semibold text-slate-900">{{ $job->employe->name }}</dd>
                              </div>
                         @endif
                    </dl>
               </div>
          </div>
     </div>
</x-layout>