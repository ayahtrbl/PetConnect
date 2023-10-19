@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Pet Connect')
<img src="https://raw.githubusercontent.com/AriesJ12/PetConnect/main/public/images/logo.png?token=GHSAT0AAAAAACHJ54JIESNBKBABRXMJOQLGZJQWRTA" class="logo" alt="Pet Connect Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
