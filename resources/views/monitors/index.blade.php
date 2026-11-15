@extends('layout')

@section('content')
    <a href="{{ route('monitors.create') }}">+ Add Monitor</a>
    <table>
        <tr><th>Name</th><th>URL</th><th>Status</th><th>Actions</th></tr>
        @forelse ($monitors as $monitor)
            <tr>
                <td>{{ $monitor->name }}</td>
                <td>{{ $monitor->url }}</td>
                <td>{{ $monitor->last_status ?? 'Not checked' }}</td>
                <td>
                    <a href="{{ route('monitors.edit', $monitor) }}">Edit</a>
                    <form method="POST" action="{{ route('monitors.destroy', $monitor) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No monitors yet.</td></tr>
        @endforelse
    </table>
@endsection