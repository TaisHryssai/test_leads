@extends('layouts.app')

@section('title', 'Lead')
@section('content')

<div class="card">
  <div class="card-body">
  <p><strong>Nome Completo: </strong> {{ $lead->name }}</p>
  <p><strong>Email: </strong> {{ $lead->email }}</p>
  <p><strong>Telefone: </strong> {{ $lead->phone }}</p>
    
  </div>
</div>

@component('components.index.delete_and_edit', ['edit_url' => route('lead.edit', $lead->id),
                                              'url' => route('lead.destroy', $lead->id)]) @endcomponent
@endsection
