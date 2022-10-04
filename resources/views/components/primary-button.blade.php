<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-nunito font-bold items-center px-4 py-2 bg-blue hover:bg-blue-dark border border-transparent rounded text-sm text-white focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
