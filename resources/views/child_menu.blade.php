@if ($categorieParent->categoryChildent->count())
    <ul>
        @foreach ($categorieParent->categoryChildent as $categoryChildent)
            <li>
                <a href=""> {{ $categoryChildent->title }}</a>
                @if ($categoryChildent->count())
                    @include('child_menu', ['categorieParent' => $categoryChildent])
                @endif
            </li>
        @endforeach
    </ul>
@endif
