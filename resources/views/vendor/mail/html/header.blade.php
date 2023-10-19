@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Pet Connect')
<img src="https://github.com/AriesJ12/PetConnect/blob/a408f471774724770a258cbda3915fadd799a35a/public/images/logo.png" class="logo" alt="Pet Connect Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
