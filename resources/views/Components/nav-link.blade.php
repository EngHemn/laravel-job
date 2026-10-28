@props([
     'active' => false,
     'type' => 'a'
])
<{{ $type }} {{ $attributes }}
     aria-current="{{ $active ? 'page' : 'false' }}"
     class="rounded-lg px-3.5 py-2 text-sm font-medium transition-colors duration-150 {{ $active ? 'bg-cyan-600 text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
     {{ $slot }}
</{{ $type }}>
