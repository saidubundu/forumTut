@if($answers->isEmpty())

@else
<div class="row mt-4">
    <div class="col-md-12v">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $answersCount . " " . str_plural('Answers', $answersCount) }}</h2>
                </div>
                <hr>
                @include('layouts._messages')
                @foreach($answers as $answer)
                    @include('answers._answer')

                @endforeach
            </div>
        </div>
    </div>
</div>
    @endif
