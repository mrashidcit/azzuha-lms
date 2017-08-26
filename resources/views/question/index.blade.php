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

    </div>
</section>
@yield('footer')
</body>
</html>
