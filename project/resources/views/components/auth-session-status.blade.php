@props(['status'])
@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-black-600']) }}>
        <p>{{$status}}</p>
    </div>
@endif
