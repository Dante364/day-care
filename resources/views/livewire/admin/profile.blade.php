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
            <x-button label="Home" icon="o-arrow-uturn-left" link="/admin/home" class="btn-ghost btn-sm" responsive />
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

                <x-menu-item title="Home" icon="o-sparkles" link="/admin/home" />
                <x-menu-item title="View Children" icon="o-user-group" link="/admin/view-children" />
                <x-menu-item title="View Staff" icon="o-user" link="/admin/view-staff" />
                <x-menu-item title="View Parent" icon="o-user" link="/admin/view-parent" />
            </x-menu>
        </x-slot:sidebar>

        <x-slot:content>

            <x-form wire:submit="update">
                <x-input wire:model="name" label="Name" />
                <x-input wire:model="email" label="Email" />
                <x-input wire:model="phone" label="Phone" />
                
                <x-slot:actions>
                    <x-button type="submit" label="Update" spinner="save" />
                </x-slot:actions>
            </x-form>

        </x-slot:content>
    </x-main>
</div>
