<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $header ?? 'Job Board' }}</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full flex flex-col text-slate-800 antialiased">
     <nav class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
          <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
               <div class="flex items-center gap-8">
                    <a href="/" class="flex items-center gap-3">
                         <img src="{{ asset('IMAGE/image.png') }}" alt="Logo"
                              class="h-10 w-10 rounded-full object-cover ring-2 ring-cyan-500/30">
                         <span class="text-lg font-bold tracking-tight text-slate-900">Job<span class="text-cyan-600">Board</span></span>
                    </a>
                    <div class="hidden sm:flex items-center gap-1">
                         <x-nav-link href="/" :active="request()->is('/')" type="a">Welcome</x-nav-link>
                         <x-nav-link href="/home" :active="request()->is('home')" type="a">Home</x-nav-link>
                         <x-nav-link href="/jobs" :active="request()->is('jobs') || request()->is('job/*')" type="a">Jobs</x-nav-link>
                         <x-nav-link href="/greet/h4mn" :active="request()->is('greet/*')" type="a">Greet</x-nav-link>
                    </div>
               </div>

               <div class="flex items-center gap-3">
                    <a href="/jobs/create"
                         class="inline-flex items-center gap-2 rounded-lg bg-cyan-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                         <span>+ Post a Job</span>
                    </a>
               </div>
          </div>
     </nav>

     <header class="border-b border-slate-200 bg-white shadow-xs">
          <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
               <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">{{ $header }}</h1>
          </div>
     </header>

     <main class="mx-auto w-full max-w-6xl flex-1 px-4 py-8 sm:px-6 lg:px-8">
          {{ $slot }}
     </main>

     <footer class="border-t border-slate-200 bg-white py-6 text-center text-sm text-slate-500">
          <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
               &copy; {{ date('Y') }} JobBoard. Built with Laravel &amp; Tailwind CSS.
          </div>
     </footer>
</body>

</html>
