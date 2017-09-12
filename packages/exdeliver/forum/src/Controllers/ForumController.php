<?php

namespace Exdeliver\Forum\Controllers;

use Exdeliver\Forum\Requests\MessageFormRequest;
use Exdeliver\Forum\Requests\ThreadFormRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Exdeliver\Forum\Services\ThreadService;
use Exdeliver\Forum\Services\MessageService;

class ForumController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('forum::pages.index');
    }

    public function getThread(Request $request)
    {
        try {
            $thread = ThreadService::getBySlug($request->slug);
        } catch (\Exception $e) {
            // thread couldn't be found
            throw new \Exception();
        }

        return view('forum::thread.index')
            ->with('thread', $thread);
    }

    public function postThread(ThreadFormRequest $request)
    {

        $result = ThreadService::save($request);

        // return redirect()->to();
    }

    public function postMessage(MessageFormRequest $request)
    {

        $message = MessageService::save($request);

        // return redirect()->to();
    }
}