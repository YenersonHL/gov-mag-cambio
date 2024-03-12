@extends('layouts.public')
@section('title', 'Inicio')
@section('body')
<x-blog-header />
<x-section-blogs />
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
