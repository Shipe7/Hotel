@props(['title' => '', 'rating' => ''])
<ul class="mb-0 ps-0">
    {{ $title }}
    <li class="list-inline-item me-0">
        <i class="{{ $rating >= 1 ? 'fa' : 'far'}} {{ $rating > 0 && $rating < 1 ? 'fa-star-half-alt' : 'fa-star'}} text-warning fs-9"></i>
    </li>
    <li class="list-inline-item me-0">
        <i class="{{ $rating >= 2 ? 'fa' : 'far'}} {{ $rating > 1 && $rating < 2 ? 'fa-star-half-alt' : 'fa-star'}} text-warning fs-9"></i>
    </li>
    <li class="list-inline-item me-0">
        <i class="{{ $rating >= 3 ? 'fa' : 'far'}} {{ $rating > 2 && $rating < 3 ? 'fa-star-half-alt' : 'fa-star'}} text-warning fs-9"></i>
    </li>
    <li class="list-inline-item me-0">
        <i class="{{ $rating >= 4 ? 'fa' : 'far'}} {{ $rating > 3 && $rating < 4 ? 'fa-star-half-alt' : 'fa-star'}} text-warning fs-9"></i>
    </li>
    <li class="list-inline-item me-0">
        <i class="{{ $rating >= 5 ? 'fa' : 'far'}} {{ $rating > 4 && $rating < 5 ? 'fa-star-half-alt' : 'fa-star'}} text-warning fs-9"></i>
    </li>
    {{ $slot }}
</ul>
