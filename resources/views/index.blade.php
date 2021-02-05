@extends('layouts.app')

@section('title', 'aa')
@section('content')

@component('components.index.header', ['base_search_path' => route('lead.index'),
                                       'new_url' => route('lead.create'),
                                       'new_btn_name' => 'Novo Contato']) @endcomponent

<div class="table-responsive mt-3">

  <table class="table card-table table-striped table-vcenter table-data">
    <thead>
      <tr>
        <th>Título</th>
        <th>Aberto em</th>
        <th>Válido até</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <div class="mt-5 float-right flex-wrap">
  </div>
</div>
@endsection
