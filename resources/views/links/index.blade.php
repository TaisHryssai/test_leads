@extends('layouts.app')

@section('title', 'Ligações')
@section('content')

@component('components.index.header', ['new_btn_name' => 'Nova Lead']) @endcomponent

<div class="table-responsive mt-3">
  <table class="table card-table table-striped table-vcenter table-data">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Data da Ligação</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @each('links._link_row', $leads, 'lead')
    </tbody>
  </table>
  <div class="mt-5 float-right flex-wrap">
  </div>
</div>
@endsection
