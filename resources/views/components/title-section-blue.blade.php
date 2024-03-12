@if($subtitle !== '' OR $title !== '')
<div class="d-block lh-sm text-uppercase text-blue mb-4">
    <p class="mb-0 fs-4 lh-1">{{ $subtitle }}</p>
    <p class="fs-1 fw-bold m-0">{{ $title }}</p>
</div>
@endif
@if($description !== '')
<p class="text-blue ps-4 border-start border-3 border-blue py-3">{{ $description }}</p>
@endif