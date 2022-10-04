<div class="flex flex-col justify-between h-full w-full">
	<div class="p-8">
		<ul class="leading-10 text-lg font-semibold">
			<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
				<x-icons.home class="{{ request()->routeIs('dashboard') ? 'fill-white' : 'fill-blue-lighter' }}h-5 w-5 mr-3"/>
				Resumen
			</x-nav-link>
			<x-nav-link :href="route('company')" :active="request()->routeIs('company')">
				<x-icons.company class="{{ request()->routeIs('company') ? 'fill-white' : 'fill-blue-lighter' }}h-5 w-5 mr-3"/>
				Empresa
			</x-nav-link>
			<x-nav-link :href="route('workers')" :active="request()->routeIs('workers')">
				<x-icons.worker class="{{ request()->routeIs('workers') ? 'fill-white' : 'fill-blue-lighter' }}h-5 w-5 mr-3"/>
				Trabajadores
			</x-nav-link>
			<x-nav-link :href="route('foo')" :active="request()->routeIs('foo')">
				<x-icons.machine class="{{ request()->routeIs('dashboard') ? 'fill-white' : 'fill-blue-lighter' }}h-5 w-5 mr-3"/>
				Máquinas
			</x-nav-link>
			<x-nav-link :href="route('bar')" :active="request()->routeIs('bar')">
				<x-icons.company class="{{ request()->routeIs('dashboard') ? 'fill-white' : 'fill-blue-lighter' }}h-5 w-5 mr-3"/>
				Obras
			</x-nav-link>
		</ul>
	</div>
	<div>
		<hr class="w-full border-blue-lighter">
		<div class="flex text-lg font-semibold bottom-1 px-8 py-4">
			<x-nav-link :href="route('bar')" :active="request()->routeIs('bar')">
				<x-icons.doc class="{{ request()->routeIs('dashboard') ? 'fill-white' : 'fill-blue-lighter' }}h-5 w-5 mr-3"/>
				Documentación
			</x-nav-link>
		</div>
		<div class="bg-blue-dark flex justify-between text-xs px-2 py-1">
			<span class="flex">
				<img class="mr-1.5" src="{{ Vite::asset('resources/images/icons/phone.svg') }}" alt="Teléfono MONDO Ibérica" width="15" height="15">
				976 123 456
			</span>
			<span class="flex">
				<img class="mr-1.5" src="{{ Vite::asset('resources/images/icons/email.svg') }}" alt="E-mail MONDO Ibérica" width="15" height="15">
				foobar@foobar.com
			</span>
		</div>
	</div>
</div>
