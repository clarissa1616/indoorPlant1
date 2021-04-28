<x-layouts>
    <x-slot name="title">Articoli</x-slot>
    
    
    <div class="container bg-index mt-5">
            <div class="row">
            <div class="col-12 mt-5 " style="text-align: -webkit-center;">
                @if (session('message'))
                <div class="alert alert-success ">
                    <p class="font-weight-bold">{{session('message')}}</p>
                </div>
                @endif
                <h1>Il nostro blog</h1>
                <div class="row">
                    @foreach ($articles as $article)
                    <div class="col-12 my-5 align-item-center">
                        <div class="card mb-3 card-cstm container-fluid">
                            <div class="row no-gutters">
                                <div class="col-md-4 card-cstm my-3">
                                    @if (isset($article->img) && !empty($article->img))
                                        <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid rounded " alt="img">
                                    @else 
                                    <img src="https://picsum.photos/200" class="card-img-top img-fluid rounded " alt="img">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{$article->title}}</h5>
                                        <div class="container-fluid"style="white-space: pre-line;">
                                            <p class="card-text" style="text-align:justify">{{$article->body}}</p>
                                            <a href="{{route('articles.show', compact('article'))}}" class="btn btn-success btn-cst-create">Visualizza</a>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>   
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts>