<div class="position-relative overflow-hidden rounded-3 shadow-sm">
    <img class="object-img" src="{{ asset("img/galery/".$img) }}" class="object-img" style="height: 200px;" alt="">
    @if($title)
    <div class="position-absolute bottom-0 start-0 bg-orange mb-3 py-2 px-3 text-white col-11">
        {{ $title }}
    </div>
    @endif
</div>