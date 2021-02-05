@extends('layouts.app')

@section('title', 'Criar Novo Lead')
@section('content')

<form action="{{route('lead.store')}}" method="post" novalidate="">
  @csrf

      @component('components.form.input_text', ['field'    => 'name',
                                              'label'    => 'Nome Completo',
                                              'model'    => 'lead',
                                              'value'    => '',
                                              'required' => true,
                                              'errors'   => $errors]) @endcomponent
      
      @component('components.form.input_email',['field'    => 'email',
            'label'    => 'Email',
            'model'    => 'lead',
            'value'    => '',
            'required' => true,
            'errors'   => $errors]) @endcomponent

      @component('components.form.input_tel', ['field'    => 'phone',
                                              'label'    => 'Telefone',
                                              'model'    => 'lead',
                                              'value'    => '',
                                              'required' => true,
                                              'errors'   => $errors]) @endcomponent

    @component('components.form.input_submit',['value' => 'Criar Lead', 'back_url' => route('lead.index')]) @endcomponent

</form>
@endsection
