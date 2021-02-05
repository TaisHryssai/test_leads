<tr>
 @foreach($lead->links as $link)
 <td>
   <a href="{{route('lead.show', $link->id)}}">{{$link->seller}}</a>
</td>

<td>
  {{$link->call_date->format('d/m/Y H:m')}}
</td>
@endforeach

</tr>
