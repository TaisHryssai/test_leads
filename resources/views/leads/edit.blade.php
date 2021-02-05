@extends('layouts.app')

@section('title', 'Editar Lead')
@section('content')

<form action="{{route('lead.update', $lead->id)}}" method="post" novalidate="">
  @csrf
  @method('patch')
      @component('components.form.input_text', ['field'    => 'name',
                                              'label'    => 'Nome Completo',
                                              'model'    => 'lead',
                                              'value'    => $lead->name,
                                              'required' => true,
                                              'errors'   => $errors]) @endcomponent
      
      @component('components.form.input_email',['field'    => 'email',
            'label'    => 'Email',
            'model'    => 'lead',
            'value'    => $lead->email,
            'required' => true,
            'errors'   => $errors]) @endcomponent

      @component('components.form.input_tel', ['field'    => 'phone',
                                              'label'    => 'Telefone',
                                              'model'    => 'lead',
                                              'value'    => $lead->phone,
                                              'required' => true,
                                              'errors'   => $errors]) @endcomponent

    @component('components.form.input_submit',['value' => 'Atualizar Lead', 'back_url' => route('lead.index')]) @endcomponent

</form>
@endsection
