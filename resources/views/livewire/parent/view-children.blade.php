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
        @php
            // Assuming the parent is the currently authenticated user
            $parent = auth()->user();
            $children = $parent->children; // Fetch only children belonging to the authenticated parent

            $headers = [
                ['key' => 'id', 'label' => '#'],
                ['key' => 'name', 'label' => 'Name'],
                ['key' => 'age', 'label' => 'Age'],
                ['key' => 'actions', 'label' => 'Actions'],
            ];
        @endphp

        <x-header title="Children" with-anchor separator />
        <x-button wire:click="openCreateModal" label="Add Child" icon="o-plus" class="btn-sm" />
        <x-table :headers="$headers" :rows="$children" striped>
            @foreach($children as $child)
                @scope('actions', $child)
                <div class="flex">
                    <x-button icon="o-eye" wire:click="view({{ $child->id }})" spinner class="btn-sm" />
                </div>
                @endscope
            @endforeach
        </x-table>

        <x-modal wire:model="addModal" title="Add Child">
            <x-form wire:submit.prevent="create">
                <x-input label="Name" wire:model="name" />
                <x-input label="Age" wire:model="age" />

                <x-slot:actions>
                    <x-button label="Cancel" wire:click="closeCreateModal" class="btn-ghost" />
                    <x-button label="Save" type="submit" class="btn-primary" />
                </x-slot:actions>
            </x-form>
        </x-modal>

        <x-modal wire:model="viewModal" title="View Details">
            <x-form>
                <x-input lebel="Parents name" wire:model="parent_name" disabled />
                <x-input label="Name" wire:model="name" disabled />
                <x-input label="Age" wire:model="age" disabled />
            </x-form>
        </x-modal>
        </x-slot:content>
    </x-main>
</div>
