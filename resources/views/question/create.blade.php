@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                <form action="/questionnaires/{{ $questionnaire->id }}/question" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control"
                             value="{{ old('question.question') }}"
                             id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted"> Ask simple and to-the-point Questions for the best result </small>
                            @error('question.question')
                            <small class="text-danger"> {{ $message }} </small>
                            @enderror
                        </div>

                        <fieldset>
                            <legend>Choices</legend>
                            <small id="choicesHelp" class="form-text text-muted"> Give Choices that give you the most insight into your Question  </small>
                            <div>
                                <div class="form-group">
                                    <label for="answare1">Choice 1</label>
                                    <input name="answares[][answare]" type="text"
                                    value="{{ old('answares.0.answare') }}"
                                    class="form-control" id="answare1" aria-describedby="choicesHelp"
                                    placeholder="Enter choice 1">
                                    <small id="answare1Help" class="form-text text-muted"> Giving a Pourpose will increase resposes.</small>

                                    @error('answares.0.answare')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="answare2">Choice 2</label>
                                    <input name="answares[][answare]" type="text"
                                    value="{{ old('answares.1.answare') }}"
                                    class="form-control" id="answare2" aria-describedby="choicesHelp"
                                    placeholder="Enter choice 2">
                                    <small id="answare1Help" class="form-text text-muted"> Giving a Pourpose will increase resposes.</small>

                                    @error('answares.1.answare')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="answare3">Choice 3</label>
                                    <input name="answares[][answare]" type="text"
                                    value="{{ old('answares.2.answare') }}"
                                    class="form-control" id="answare3" aria-describedby="choicesHelp"
                                    placeholder="Enter choice 3">
                                    <small id="answare1Help" class="form-text text-muted"> Giving a Pourpose will increase resposes.</small>

                                    @error('answares.2.answare')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="answare4">Choice 4</label>
                                    <input name="answares[][answare]" type="text"
                                    value="{{ old('answares.3.answare') }}"
                                    class="form-control" id="answare4" aria-describedby="choicesHelp"
                                    placeholder="Enter choice 4">
                                    <small id="answare1Help" class="form-text text-muted"> Giving a Pourpose will increase resposes.</small>

                                    @error('answares.3.answare')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-primary"> Add Question </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
