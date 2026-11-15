<h1>Monitors</h1>
@foreach ($monitors as $monitor)
    <p>{{ $monitor->name }} - {{ $monitor->url }}</p>
@endforeach