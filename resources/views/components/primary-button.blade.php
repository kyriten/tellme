<button {{ $attributes->merge(['type' => 'submit', 'class' => ' lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white tracking-wide font-semibold rounded-xl transition duration-200 uppercase']) }}>
    {{ $slot }}
</button>
