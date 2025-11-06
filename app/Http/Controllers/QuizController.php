<?php

namespace App\Http\Controllers;

use App\Models\AnswerKey;
use App\Models\Progress;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class QuizController extends Controller
{
    protected array $menus = [
        [
            'name' => 'Karakteristik',
            'route' => 'dashboard.karakteristik',
            'progress' => 0,
            'key' => 'karakteristik',
        ],
        [
            'name' => 'Rekonstruksi',
            'route' => 'dashboard.rekonstruksi',
            'progress' => 1,
            'key' => 'rekonstruksi',
        ],
        [
            'name' => 'Menyelesaikan Masalah',
            'route' => 'dashboard.masalah',
            'progress' => 2,
            'key' => 'masalah',
        ],
        [
            'name' => 'Evaluasi',
            'route' => 'dashboard.evaluasi',
            'progress' => 3,
            'key' => 'evaluasi',
        ],
    ];

   
    public function show($quizKey)
    {
        $progress = Progress::where('user_id', auth()->id())->first();

        $quiz = Quiz::where('key', $quizKey)
            ->with(['questions' => function ($q) {
                $q->orderBy('question_number');
            }])
            ->first();

        if (!$quiz) {
            abort(404, 'Quiz tidak ditemukan');
        }

        return view('layouts.quiz', [
            'progress' => $progress,
            'menus' => $this->menus,
            'quizKey' => $quizKey,
            'quiz' => $quiz,
        ]);
    }

    public function result(Request $request, $quizKey)
    {
        $progress = Progress::where('user_id', auth()->id())->first();

        $quiz = Quiz::where('key', $quizKey)
            ->with('questions')
            ->first();

        if (!$quiz) {
            abort(404, 'Quiz tidak ditemukan');
        }

        $userAnswers = $request->except('_token');
        $score = 0;
        $results = [];
        $allAnswered = true;
        // dd($quiz, $quiz?->questions);

        foreach ($quiz->questions as $question) {
            $field = 'question_' . $question->id;
            $userAnswer = $userAnswers[$field] ?? null;

            if ($userAnswer === null) {
                $allAnswered = false;
            }

            $isCorrect = $userAnswer === $question->correct_answer;
            $score += $isCorrect ? 1 : 0;

            $results[] = [
                'question' => $question->question,
                'user_answer' => $userAnswer,
                'correct_answer' => $question->correct_answer,
                'is_correct' => $isCorrect,
            ];
        }

        if (!$allAnswered) {
            return redirect()
                ->back()
                ->withErrors('Harap jawab semua pertanyaan!')
                ->withInput();
        }

        // 🚀 Update progress user
        $menuKeys = array_column($this->menus, 'key');
        $currentProgress = array_search($quizKey, $menuKeys) + 1;

        if ($progress && $progress->progress < $currentProgress) {
            $progress->progress = $currentProgress;
            $progress->save();
        }

        return view('layouts.quizResult', [
            'quiz' => $quiz,
            'score' => $score,
            'results' => $results,
            'quizKey' => $quizKey,
            'menus' => $this->menus,
            'progress' => $progress,
        ]);
    }

    public function evaluasi(Request $request)
    {
        $answers = AnswerKey::query()
            ->whereIn('code', array_keys($request->all()))
            ->get();

        foreach ($answers as $a) {
            if ($request->input($a->code) != $a->answer) {
                throw ValidationException::withMessages([
                    $a->code => ['Jawaban salah'],
                ]);
            }
        }

        return response()->json(['message' => 'Semua jawaban benar!']);
    }

    
    public function evaluasiView()
    {
        $progress = Progress::where('user_id', auth()->id())->first();
        $quiz = Quiz::where('key', 'evaluasi')->with('questions')->firstOrFail();

        return view('layouts.quiz', [
            'progress' => $progress,
            'menus' => $this->menus,
            'quizKey' => 'evaluasi',
            'quiz' => $quiz,
        ]);
    }
}
