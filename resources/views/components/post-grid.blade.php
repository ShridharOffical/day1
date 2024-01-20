<article
class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
<x-post-main-card :gunman="$posts[0]" />
</article>

@if ($posts->count() > 1)

<div class="lg:grid lg:grid-cols-6">

    @foreach ($posts->skip(1) as $post)
        <x-post-card 
        :gunman="$post"
         class="{{$loop->iteration< 3 ? 'col-span-3':'col-span-2'}} 
                  col-span-2" />
    @endforeach
    
</div>
@endif