@extends('layouts.public')
@section('title', 'Inicio')
@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('body')
<x-section-contact />
<x-section-home-social />
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('ui/add/axios.js') }}"></script>
<script type="text/javascript">
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found.');
}
new Vue({
        delimiters: ['[[', ']]'],
        el: '#app',
        data: {
            formContact: {
                name: 'Yenerson',
                email: 'hernandez.yenr@gmail.com',
                message: 'Est es un correo de test'
            }
        },
        methods: {
            sendFormContact() {
                const formData = new FormData();
                for(let key in this.formContact){
                    formData.append(key, this.formContact[key]);
                }
                axios({
                        method: "post",
                        url: "http://127.0.0.1:8083/api/contacto/send",
                        data: formData,
                        headers: {
                            "Content-Type": "multipart/form-data"
                        },
                    })
                    .then(function(response) {
                        //handle success
                        console.log(response);
                    })
                    .catch(function(response) {
                        //handle error
                        console.log(response);
                    });


            }
        },
    });
</script>
@endsection
