@props([
    'href' => '#',
    'icon' => 'bx'
])

<li class="menu-item {{ request()->fullUrlIs(url($href)) ? "active" : "" }}">
    <a {{ $attributes }} class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="{{ $slot }}">
            {{ $slot }}
        </div>
    </a>
</li>

<a {{ $attributes }}
   class="{{ request()->fullUrlIs(url($href)) ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }}
            rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>
