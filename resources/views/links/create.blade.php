@extends('layouts.app')

@section('title', 'Nova Ligação')
@section('content')

<form action="{{route('link.store', $lead->id)}}" method="post" novalidate="">
  @csrf

      @component('components.form.input_text', ['field'    => 'lead_id',
                                              'label'    => 'Nome Completo',
                                              'model'    => 'link',
                                              'value'    => $lead->name,
                                              'required' => true,
                                              'disabled' => 'disabled',
                                              'errors'   => $errors]) @endcomponent

      @component('components.form.input_text', ['field'    => 'seller',
                                              'label'    => 'Vendedor',
                                              'model'    => 'link',
                                              'value'    => '',
                                              'required' => true,
                                              'errors'   => $errors]) @endcomponent
      
    @component('components.form.input_datetimepicker', [
                                              'field'    => 'call_date',
                                              'label'    => 'Data da Ligação',
                                              'model'    => 'link',
                                              'value'    => '',
                                              'required' => true,
                                              'errors'   => $errors]) @endcomponent

    @component('components.form.input_submit',['value' => 'Fazer Ligação', 'back_url' => route('lead.index')]) @endcomponent

</form>
@endsection
