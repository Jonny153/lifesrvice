<?php

namespace App\Http\Controllers;


use App\Mail\SiteCall;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\Http\Requests\StoreFeedback;


class FeedbackController extends Controller
{
    protected $emails;

    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->emails = config('common.contacts.toEmail');
    }


    public function call(Request $request)
    {
        try {

            Mail::to($this->emails)->send(new SiteCall($request->post()));

        } catch (\Exception $exception) {

            return response()->json([
                'status' => 'error',
                'exception' => $exception->getMessage(),
                'message' => 'Произошла ошибка, попробуйте еще раз.'
            ]);

        }

        return response()->json(['status' => 'ok', 'message' => 'Ваша заявка принята!']);
    }

    public function feedback(StoreFeedback $request)
    {
        $validatedData = $request->validated();

        Comment::create($validatedData);


        Mail::to($this->emails)->send(new FeedbackMail($validatedData));

        return response()->json([
            'status' => 'ok',
            'message' => 'Ваша заявка успешно отправлена',
            'data' => $validatedData
        ]);

    }

}
