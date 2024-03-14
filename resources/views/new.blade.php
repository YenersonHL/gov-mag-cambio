@extends('layouts.public')
@section('title', 'Inicio')
@section('body')
<x-new-markdown :new="$new" />
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('ui/add/showdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('ui/vue/components.js') }}"></script>
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
