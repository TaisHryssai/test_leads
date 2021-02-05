@extends('layouts.app')

@section('title', 'Leads')
@section('content')

@component('components.index.header', ['new_url' => route('lead.create'),
                                       'new_btn_name' => 'Novo Lead']) @endcomponent

<div class="table-responsive mt-3">
  <table class="table card-table table-striped table-vcenter table-data">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @each('leads._lead_row', $leads, 'lead')
    </tbody>
  </table>
  <div class="mt-5 float-right flex-wrap">
  </div>
</div>
@endsection
