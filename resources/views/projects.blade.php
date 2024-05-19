@extends('layouts.public')
@section('title', 'Inicio')
@section('body')
<div class="d-block mb-5">
    <x-news-header title="Proyectos de exito" />
</div>
<x-section-blogs category="project" />
@endsection
@section('script')
<script type="text/javascript">
function init() {
    console.log("init");
}
new Vue({
        delimiters: ['[[', ']]'],
        el: '#app',
        mounted() {
            init();
        },
        data: {},
        methods: {},
    });
</script>
@endsection
