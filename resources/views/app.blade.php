<x-layout.guest-layout>
    <div x-data="{open : false}">
        <button class="btn btn-warning" @click="open = !open" >Expand</button>
        <div x-always x-show="open" x-transition>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit alias doloremque debitis repudiandae recusandae molestias, facilis consectetur perferendis, inventore laboriosam dolores officiis voluptatibus? Provident aperiam quam libero debitis accusamus rem?
        </div>
    </div>
</x-layout.guest-layout>