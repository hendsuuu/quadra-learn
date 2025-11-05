<script
    id="MathJax-script"
    async
    src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"
></script>

@extends('layouts.dashboard') @section('content')
@if(auth()->check() && auth()->user()->role === 'student')
    @include('pages.materi.fungsi-kuadrat.index')
@endif
{{-- @include('pages.materi.fungsi-kuadrat.index') --}}
@endsection
