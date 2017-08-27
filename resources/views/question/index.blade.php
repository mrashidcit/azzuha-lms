<!DOCTYPE html>
<html lang="en">
@include('layout.internal')
@yield('head')
<body>
@yield('header')
<!-- <span>Add New Course Outline<span> -->
<section id="contact-page">
    <div class="container">
        <div >
            <h2 class="custom-heading">List of All Questions</h2>


            <!--  This form used to load questions of selected subject by send subject_id   -->
            <form method="get" action="{{ route('questions.questionsListBySubjectId') }}">
                <div class="form-group row">
                    <label for="correct_option" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-10" >
                        <select id="subject_id" required name="subject_id" class="custom-select" autofocus>
                            @foreach($subjects as $subject)

                                <option value="{{ $subject->id }}" >{{ $subject->name }}</option>

                            @endforeach
                        </select>
                        <button class="btn btn-primary">Load</button>
                    </div>
                </div>
            </form>

            @if( ! empty($questions))
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>A</th>
                            <th>B</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $key=>$question)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->a }}</td>
                                <td>{{ $question->b }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $questions->links() }}
                </div>
            @endif



        </div>

    </div>
</section>
@yield('footer')
</body>
</html>
