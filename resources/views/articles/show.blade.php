<x-layouts>
    
    
    <x-slot name="title">Leggi articolo</x-slot>
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-8 text-center mt-5">
                <h1>Articolo : {{$article->title}}</h1>
                @if (session('message'))
                <div class="alert btn-cst">
                    <p class="font-weight-bold">{{session('message')}}</p>
                </div>
                @endif
                <div class="card my-5 card-cstm-show">
                    <div class="row no-gutters" style="justify-content: flex-end;">
                        @if (isset($article->img) && !empty($article->img))
                            <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid rounded " alt="img">
                        @else 
                        <img src="https://picsum.photos/200" class="card-img-top img-fluid rounded " alt="img">
                        @endif

                        <div class="col-12">
                            <div class="card-body ">
                                <h3 class="card-title text-center mt-3">{{$article->title}}</h3>
                                <p class="card-text text-center mt-3">{{$article->body}}</p>
                            </div>   
                        </div>
                            <a href="{{route('articles.edit', compact('article'))}}" class="btn btn-icones "><i class="fas fa-pencil-alt fa-2x"></i></a>
                            <form action="{{route('articles.destroy', compact('article'))}} " method="POST">
                                @csrf
                                @method('DELETE') 
                                <button class="btn btn-icones" type="submit"><i class="far fa-trash-alt fa-2x trash"></i></button> 
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
</x-layouts>
