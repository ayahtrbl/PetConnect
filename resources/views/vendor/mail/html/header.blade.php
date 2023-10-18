@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Pet Connect')
<img src="https://picsum.photos/200/300" class="logo" alt="Pet Connect Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
