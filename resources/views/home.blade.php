<x-layout>
     <x-slot:header>Home</x-slot:header>

     <div class="space-y-8">
          <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-xs">
               <h2 class="text-2xl font-bold text-slate-900">Hello from Laravel</h2>
               <p class="mt-2 max-w-2xl text-slate-600">
                    Welcome to your JobBoard dashboard. Use the shortcuts below to explore open roles, publish new job listings, or manage your workspace.
               </p>

               <div class="mt-6 grid gap-4 sm:grid-cols-3">
                    <a href="/jobs"
                         class="group rounded-xl border border-slate-200 bg-slate-50/60 p-5 transition hover:border-cyan-300 hover:bg-white hover:shadow-sm">
                         <div class="text-sm font-semibold text-cyan-600">Explore</div>
                         <div class="mt-1 text-lg font-bold text-slate-900 group-hover:text-cyan-600">View Job Listings</div>
                         <p class="mt-1 text-xs text-slate-500">Browse paginated job opportunities and employer details.</p>
                    </a>

                    <a href="/jobs/create"
                         class="group rounded-xl border border-slate-200 bg-slate-50/60 p-5 transition hover:border-cyan-300 hover:bg-white hover:shadow-sm">
                         <div class="text-sm font-semibold text-cyan-600">Publish</div>
                         <div class="mt-1 text-lg font-bold text-slate-900 group-hover:text-cyan-600">Create a New Job</div>
                         <p class="mt-1 text-xs text-slate-500">Post a new job opening with title, company, salary, and date.</p>
                    </a>

                    <a href="/"
                         class="group rounded-xl border border-slate-200 bg-slate-50/60 p-5 transition hover:border-cyan-300 hover:bg-white hover:shadow-sm">
                         <div class="text-sm font-semibold text-cyan-600">Overview</div>
                         <div class="mt-1 text-lg font-bold text-slate-900 group-hover:text-cyan-600">Welcome Page</div>
                         <p class="mt-1 text-xs text-slate-500">Return to the landing page and see recent highlights.</p>
                    </a>
               </div>
          </div>
     </div>
</x-layout>
