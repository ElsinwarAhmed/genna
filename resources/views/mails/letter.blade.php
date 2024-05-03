@extends('mails.layout.app')


@section('content')
    <div>
        <h3>Mail</h3>
        @if(app()->isLocale('ar'))
        @else
        @endif
    </div>
@endsection
