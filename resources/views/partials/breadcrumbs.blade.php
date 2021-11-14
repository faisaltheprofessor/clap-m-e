@if (count($breadcrumbs))
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)

               <a class="breadcrumb-item" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
            @else
                <span class="breadcrumb-item active">{{ $breadcrumb->title }}</span>
            @endif

        @endforeach
@endif