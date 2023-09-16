@props(['disabled' => false])

<select {!! $attributes->merge([
    'class' =>
        'py-2 px-2 pr-8 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-[#991b1b] dark:focus:border-[#991b1b] focus:ring-[#991b1b] dark:focus:ring-[#991b1b] rounded-md shadow-sm',
]) !!}>
    {{ $slot }}
</select>
