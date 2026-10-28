<x-layout>
     <x-slot:header>Available Jobs</x-slot:header>

     <div class="space-y-6">
          <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
               <div>
                    <h2 class="text-lg font-semibold text-slate-900">All Open Positions</h2>
                    <p class="text-sm text-slate-500">Click on any listing to view full job details.</p>
               </div>
               <a href="/jobs/create"
                    class="inline-flex items-center justify-center rounded-lg bg-cyan-600 px-4 py-2.5 text-sm font-semibold text-white shadow-xs transition hover:bg-cyan-700">
                    + Create Job
               </a>
          </div>

          <ul class="space-y-4">
               @foreach ($jobs as $job)
                    <li class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs transition hover:border-cyan-400 hover:shadow-md">
                         <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                              <a href="/job/{{ $job['id'] }}" class="group flex-1 space-y-1.5">
                                   <div class="flex flex-wrap items-center gap-2">
                                        <span
                                             class="inline-flex items-center rounded-md bg-cyan-50 px-2.5 py-0.5 text-xs font-semibold text-cyan-700">
                                             {{ $job['company'] }}
                                        </span>
                                        @if ($job->employe)
                                             <span class="text-xs text-slate-500">
                                                  &bull; Posted by <strong
                                                       class="font-medium text-slate-700">{{ $job->employe->name }}</strong>
                                             </span>
                                        @endif
                                   </div>

                                   <h3 class="text-lg font-bold text-slate-900 transition group-hover:text-cyan-600">
                                        {{ $job['title'] }}
                                   </h3>
                              </a>

                              <div
                                   class="flex flex-row items-center justify-between gap-4 border-t border-slate-100 pt-3 sm:flex-col sm:items-end sm:border-0 sm:pt-0">
                                   <div class="flex items-center gap-3">
                                        <span
                                             class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">
                                             ${{ is_numeric($job['salary']) ? number_format((float) $job['salary']) : $job['salary'] }}
                                        </span>

                                        <form method="POST" action="/jobs/{{ $job['id'] }}" onsubmit="return confirm('Are you sure you want to delete this job?');">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit"
                                                  class="inline-flex items-center rounded-lg border border-red-200 bg-red-50 px-3 py-1.5 text-xs font-semibold text-red-600 transition hover:bg-red-600 hover:text-white cursor-pointer">
                                                  Delete
                                             </button>
                                        </form>
                                   </div>

                                   <span class="text-xs text-slate-400">
                                        Date: {{ $job['date'] }}
                                   </span>
                              </div>
                         </div>
                    </li>
               @endforeach
          </ul>

          <div class="pt-4">
               {{ $jobs->links() }}
          </div>
     </div>
</x-layout>
