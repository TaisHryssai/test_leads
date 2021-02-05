<tr>
  <td>{{ $lead->name }}</td>
  <td>{{ $lead->email }}</td>
  <td>{{ $lead->phone }}</td>
  <td>
    <a href="{{route('link.create', $lead->id)}}" class="mr-2"><i class="fas fa-phone-volume"></i></a>

    @component('components.index.edit', ['url' => route('lead.edit', $lead->id)]) @endcomponent
    @component('components.index.delete', ['url' => route('lead.destroy', $lead->id)]) @endcomponent
  </td>
</tr>
