<div>
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <input type="text" wire:model="newComment">
                    <button type="button" wire:click="addComment" >Post</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">All Comments</h2>
                        </div>
                        @foreach($comments as $comment)
                            <div class="card-body">
                                <p>{{$comment['created_at']}}</p>
                                <h3>{{$comment['creator']}}</h3>

                                <hr/>
                                <p>{{$comment['body']}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
