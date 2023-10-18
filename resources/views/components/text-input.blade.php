@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'placeholder:text-[#ffb845] bg-white/0 border-indigo-500/0 border-b-[#ffb845]  rounded-md']) !!}>
