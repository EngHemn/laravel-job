<x-layout>
     <x-slot:header>
          Edit Job: {{ $job['title'] }}
     </x-slot:header>

     <div class="mx-auto max-w-xl">
          <div class="mb-6">
               <h2 class="text-lg font-semibold text-slate-900">Job Details</h2>
               <p class="mt-1 text-sm text-slate-500">Update the information below to save changes to this job opening.
               </p>
          </div>

          <form method="POST" action="/job/{{ $job['id'] }}"
               class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xs sm:p-8">
               @csrf
               @method('PATCH')

               <x-input.input label="Job Title" name="title" value="{{ $job['title'] }}" />

               <x-input.input label="Company" name="company" value="{{ $job['company'] }}" />

               <x-input.input label="Salary (USD)" name="salary" type="number" placeholder="e.g. 85000"
                    value="{{ $job['salary'] }}" />

               <x-input.input label="Date" name="date" type="date" value="{{ $job['date'] }}" />

               <div class="mt-8 flex items-center justify-end gap-x-4 border-t border-slate-100 pt-5">
                    <a href="/job/{{ $job['id'] }}"
                         class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                         Cancel
                    </a>
                    <button type="submit"
                         class="rounded-lg bg-cyan-600 px-5 py-2.5 text-sm font-semibold text-white shadow-xs transition hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 cursor-pointer">
                         Update Job
                    </button>
               </div>
               @if ($errors->any())
                    <ul class="mt-4 text-red-600">
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               @endif
          </form>
     </div>
</x-layout>