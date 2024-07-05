<div>
    <x-nav sticky full-width>
        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div>Kindy-Joy</div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-theme-toggle darkTheme="coffee" lightTheme="retro" />
        </x-slot:actions>
    </x-nav>

    <x-main>
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
 
            {{-- MENU --}}
            <x-menu activate-by-route>

                {{-- User --}}
                @if($user = auth()->user())
                    <x-menu-separator />

                    <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded">
                        <x-slot:actions>
                            <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" no-wire-navigate link="/logout" />
                        </x-slot:actions>
                    </x-list-item>

                    <x-menu-separator />
                @endif

                <x-menu-item title="Dashboard" icon="o-sparkles" link="/parent/home" />
                <x-menu-item title="View Children" icon="o-user-group" link="/parent/view-children" />
                <x-menu-item title="Track Payments" icon="o-currency-dollar" link="/parent/track-payments" />
                <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                    <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                </x-menu-sub>
            </x-menu>
        </x-slot:sidebar>

        <x-slot:content>
        <livewire:chart.parent.bar />
        </x-slot:content>
    </x-main>
</div>
