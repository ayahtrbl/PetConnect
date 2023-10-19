<button {{ $attributes->merge(['type' => 'submit', 'class' => ' !text-black inline-flex items-center justify-center px-4 py-2 bg-[#f5dfbb] border-[#ffb845] rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#ffb845] focus:bg-[#ffb845] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
