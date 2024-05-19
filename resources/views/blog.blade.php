@extends('layouts.public')
@section('title', 'Inicio')
@section('body')
blog
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
