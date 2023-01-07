@extends('client.master')

@section('title')
    Quiz
@endsection

@section('src')
    <!-- quiz stylesheet -->
    <link rel="stylesheet" href="{{asset('client')}}/css/quiz.css">
@endsection

@section('content')
    <!-- start Quiz button -->
    @if($quizzes->isEmpty())
        <div style="padding: 20px; background-color: white; color: black; text-align: center" class="start_btn">
            No Available Quiz
            <br>
            <span style="color: red;">Reload to Play Random Quiz</span><br><br>
            <a style="font-size: 18px; padding: 10px 15px; color: white; border-radius: 5px; background-color: #0a58ca;" href="{{route('randomQuiz')}}">Reload</a>
        </div>
    @else
        <div class="start_btn"><button>Start Quiz</button></div>

        <!-- Info Box -->
        <div class="info_box">
            <div class="info-title"><span>Some Rules of this Quiz</span></div>
            <div class="info-list">
                <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
                <div class="info">2. Once you select your answer, it can't be undone.</div>
                <div class="info">3. You can't select any option once time goes off.</div>
                <div class="info">4. You can't exit from the Quiz while you're playing.</div>
                <div class="info">5. You'll get points on the basis of your correct answers.</div>
            </div>
            <div class="buttons">
                <button class="quit">
                    <a href="{{route('index')}}">Home</a>
                </button>
                <button class="restart">Continue</button>
            </div>
        </div>


        <!-- Quiz Box -->
        <div class="quiz_box">
            <header>
                <div class="title">Awesome Quiz Application</div>
                <div class="timer">
                    <div class="time_left_txt">Time Left</div>
                    <div class="timer_sec">15</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">
                    <!-- Here I've inserted question from JavaScript -->
                </div>
                <div class="option_list">
                    <!-- Here I've inserted options from JavaScript -->
                </div>
            </section>

            <!-- footer of Quiz Box -->
            <footer>
                <div class="total_que">
                    <!-- Here I've inserted Question Count Number from JavaScript -->
                </div>
                <button class="next_btn">Next</button>
            </footer>
        </div>


        <!-- Result Box -->
        <div class="result_box">
            <div style="position: relative; width: 100%;">
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
            </div>
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">
                You've completed the Quiz!
            </div>
            <div class="score_text">
                <!-- Here I've inserted Score Result from JavaScript -->
            </div>
            <div class="buttons">
                <button class="restart">Replay Quiz</button>
                <button class="quit">
                    <a href="{{route('index')}}">Home</a>
                </button>
            </div>
        </div>

        <script>
            // creating an array and passing the number, questions, options, and answers
            let questions = [
                    @php $i = 1; @endphp
                    @foreach($quizzes as $quiz)
                {
                    numb: {{$i++}},
                    question: "{{$quiz->question}}",
                    answer: "{{$quiz->answer}}",
                    options: [
                        "{{$quiz->option_1}}",
                        "{{$quiz->option_2}}",
                        "{{$quiz->option_3}}",
                        "{{$quiz->option_4}}"
                    ]
                },
                @endforeach
            ];
        </script>
    @endif


    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="{{asset('client')}}/js/quiz.js"></script>
    <!--right click off -->
    <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
@endsection
