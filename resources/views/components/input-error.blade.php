@props(['messages'])

@if ($messages)
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
        <ul {{ $attributes->merge(['class' => 'text-sm list-disc list-inside space-y-1']) }}>
            @foreach ((array) $messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
