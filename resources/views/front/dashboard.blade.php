<x-front-layout section="resumen">
	<div class="grid grid-cols-2 gap-6">
		<div class="mb-6">
			<h2 class="uppercase font-bebas text-blue text-2xl mb-3">Empresa</h2>
			<div class="shadow-xl border border-gray-100 rounded-lg h-72 p-8">
				<h3 class="border-b-2 border-black uppercase font-semibold text-black mb-6">Estado de documentos</h3>
				<div class="grid grid-cols-4 gap-3 h-4/5">
					<x-card-status color="red" message="Rechazados" :count="10">Rechazados</x-card-status>
					<x-card-status color="blue" message="Pendientes" :count="10">Pendientes</x-card-status>
					<x-card-status color="orange" message="En revisión" :count="10">En revisión</x-card-status>
					<x-card-status color="green" message="Aceptados" :count="10">Aceptados</x-card-status>
				</div>
			</div>
		</div>
		<div class="mb-6">
			<h2 class="uppercase font-bebas text-blue text-2xl mb-3">Trabajadores</h2>
			<div class="shadow-xl border border-gray-100 rounded-lg h-72 p-8">
				<h3 class="border-b-2 border-black uppercase font-semibold text-black mb-6">Estado de documentos</h3>
				<div class="grid grid-cols-4 gap-3 h-4/5">
					<x-card-status color="red" message="Rechazados" :count="10">Rechazados</x-card-status>
					<x-card-status color="blue" message="Pendientes" :count="10">Pendientes</x-card-status>
					<x-card-status color="orange" message="En revisión" :count="10">En revisión</x-card-status>
					<x-card-status color="green" message="Aceptados" :count="10">Aceptados</x-card-status>
				</div>
			</div>
		</div>
		<div class="mb-6">
			<h2 class="uppercase font-bebas text-blue text-2xl mb-3">Máquinas</h2>
			<div class="shadow-xl border border-gray-100 rounded-lg h-72 p-8">
				<h3 class="border-b-2 border-black uppercase font-semibold text-black mb-6">Estado de documentos</h3>
				<div class="grid grid-cols-4 gap-3 h-4/5">
					<x-card-status color="red" message="Rechazados" :count="10">Rechazados</x-card-status>
					<x-card-status color="blue" message="Pendientes" :count="10">Pendientes</x-card-status>
					<x-card-status color="orange" message="En revisión" :count="10">En revisión</x-card-status>
					<x-card-status color="green" message="Aceptados" :count="10">Aceptados</x-card-status>
				</div>
			</div>
		</div>
		<div class="mb-6">
			<h2 class="uppercase font-bebas text-blue text-2xl mb-3">Obras</h2>
			<div class="shadow-xl border border-gray-100 rounded-lg h-72 p-8">
				<h3 class="border-b-2 border-black uppercase font-semibold text-black mb-6">Estado de documentos</h3>
				<div class="grid grid-cols-4 gap-3 h-4/5">
					<x-card-status color="red" message="Rechazados" :count="10">Rechazados</x-card-status>
					<x-card-status color="blue" message="Pendientes" :count="10">Pendientes</x-card-status>
					<x-card-status color="orange" message="En revisión" :count="10">En revisión</x-card-status>
					<x-card-status color="green" message="Aceptados" :count="10">Aceptados</x-card-status>
				</div>
			</div>
		</div>
	</div>


</x-front-layout>
