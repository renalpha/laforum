<?php

namespace Exdeliver\Forum\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Exdeliver\Forum\Services\ThreadService;
use Exdeliver\Forum\Services\MessageService;

class ForumController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('forum::index');
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

    public function postThread(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
        ]);

        $result = ThreadService::save($request);

        // return redirect()->to();
    }

    public function postMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message = MessageService::save($request);

        // return redirect()->to();
    }
}