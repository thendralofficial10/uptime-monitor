@csrf
<p>
    <input name="name" placeholder="Name" value="{{ old('name', $monitor->name ?? '') }}">
    @error('name') <span class="error">{{ $message }}</span> @enderror
</p>
<p>
    <input name="url" placeholder="https://example.com" value="{{ old('url', $monitor->url ?? '') }}">
    @error('url') <span class="error">{{ $message }}</span> @enderror
</p>
<p>
    <input name="expected_status" type="number" value="{{ old('expected_status', $monitor->expected_status ?? 200) }}">
    @error('expected_status') <span class="error">{{ $message }}</span> @enderror
</p>
<button type="submit">Save</button>