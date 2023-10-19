@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Pet Connect')
<img :src="asset('images/logo.png')" class="logo" alt="Pet Connect Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
