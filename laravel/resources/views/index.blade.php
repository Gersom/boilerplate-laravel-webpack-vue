@extends('layouts.app')

  {{--------------------------------------
    #Data include => Head
  ---------------------------------------}}
  @section('head')
    <title>Tacna valley</title>
    @include('templates.env-style')
  @endsection



  {{--------------------------------------
    #Data include => Body
  ---------------------------------------}}
  @section('body')
    @parent
    <div id="root"></div>
    @include('templates.env-script')
  @endsection
