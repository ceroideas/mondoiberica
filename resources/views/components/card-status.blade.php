@props(['color' => 'green', 'message' => 'Aceptados', 'count' => 0])

<div {{ $attributes->merge(['class' => 'bg-'.$color.'-50 rounded-lg flex flex-col justify-center items-center']) }}>
	<span {{ $attributes->merge(['class' => 'text-'.$color.'-500 h-32 flex flex-col justify-between items-center pt-3']) }}>
		@if($color == 'red')
			<img src="{{ Vite::asset('resources/images/status/error.svg') }}" alt="{{ $message }}" width="70">
		@elseif ($color == 'orange')
			<img src="{{ Vite::asset('resources/images/status/warning_orange.svg') }}" alt="{{ $message }}" width="70">
		@elseif ($color == 'blue')
			<img src="{{ Vite::asset('resources/images/status/pending_blue.svg') }}" alt="{{ $message }}" width="70">
		@else
			<img src="{{ Vite::asset('resources/images/status/success.svg') }}" alt="{{ $message }}" width="70">
		@endif
		
		@if($count > 0)
			<div {{ $attributes->merge(['class' => 'bg-'.$color.'-500 text-white flex justify-center items-center h-6 w-6 rounded-full absolute -mt-6 lg:ml-16 2xl:ml-20 text-sm font-bold']) }}>{{$count}}</div>
		@endif
		<strong>
			{{ $slot }}
		</strong>
	</span>
</div>