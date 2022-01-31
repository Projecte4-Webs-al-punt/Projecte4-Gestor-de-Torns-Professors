<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src='http://tutory.cat/Tutory.cat-removebg-preview.png' class="logo" alt="Tutory Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
