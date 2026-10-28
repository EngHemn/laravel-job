@props([
     'label' => null,
     'name' => '',
     'type' => 'text',
     'value' => ' ',
])

<div class="mb-5">
     @if ($label)
          <label for="{{ $name }}" class="mb-1.5 block text-sm font-medium text-slate-700">
               {{ $label }}
          </label>
     @endif
     <input
          type="{{ $type }}"
          name="{{ $name }}"
          id="{{ $name }}"
          value="{{ old($name, $value ?? '') }}"
          {{ $attributes->merge([
               'class' => 'w-full rounded-lg border px-3.5 py-2.5 text-sm text-slate-900 shadow-xs transition placeholder:text-slate-400 focus:border-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/20 ' . ($errors->has($name) ? 'border-red-400 bg-red-50/30' : 'border-slate-300 bg-white')
          ]) }}
     >

     @error($name)
          <p class="mt-1.5 text-xs font-medium text-red-600">{{ $message }}</p>
     @enderror
</div>
