@extends ('layout.indexlayout')

@section('title')
    Inicio-Boomcrash
@endsection

@section('body')
<div class="row tm-row">

    @foreach ($posts as $post)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{route('posts',$post)}}" class="effect-lily tm-post-link tm-pt-60">
            
            <div class="tm-post-link-inner bg-cover">
                   
                <img src="{{Storage::url($post->imagenes->url)}}" alt="Image" class="img-fluid">                            
            </div>
            <span class="position-absolute tm-new-badge">Nuevo</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><a href="{{route('posts',$post)}}">{{$post->name}}</a></h2>
        </a>                    
        <p class="tm-pt-30">
            There is a clickable image with beautiful hover effect and active title link for each post item. 
            Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span >
                @foreach ($post->tags as $tag)
                    <a href="" style="inline-block; color:{{$tag->color}}; text-white; rounded-full">{{$tag->name}}</a>
                @endforeach
            </span>
            <span class="tm-color-primary">June 24, 2020</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>36 comments</span>
            <span>by Admin Nat</span>
        </div>
    </article>

    @endforeach

</div>
@endsection
@section('footer')
<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Antes</a>
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Siguiente</a>
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Pagina</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
                <li class="tm-paging-item active">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                </li>
            </ul>
        </nav>
    </div>                
</div> 
@endsection