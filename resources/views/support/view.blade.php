@extends('layouts.dashboard')

@section('content')
@livewire('Support_chat',[
    'support_id' => $schat->id,
])

@endsection