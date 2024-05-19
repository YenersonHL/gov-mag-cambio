@extends('layouts.public')
@section('title', 'Inicio')
@section('body')
<div class="d-block mb-4">
    <x-news-header  title="Noticias" />
</div>
<x-news-outstanding />
<x-news-list />
@endsection
@section('script')
<script type="text/javascript">
function init() {
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
