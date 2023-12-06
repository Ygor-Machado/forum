<?php

namespace App\Http\Controllers\Api;

use App\DTO\Replies\CreateReplyDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReplySupportRequest;
use App\Http\Resources\ReplySupportResource;
use App\Services\ReplySupportService;
use App\Services\SupportService;
use Illuminate\Http\Request;

class ReplySupportController extends Controller
{
    public function __construct(protected SupportService $supportService, protected  ReplySupportService $replyService)
    {
    }

    public function getRepliesFromSupport(string $supportId)
    {
        if (!$this->supportService->findOne($supportId)) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $replies = $this->replyService->getAllBySupportId($supportId);

        return ReplySupportResource::collection($replies)
            ->response()
            ->setStatusCode(201);
    }

    public function createNewReplie(StoreReplySupportRequest $request)
    {
        $reply = $this->replyService->createNew(
            CreateReplyDTO::makeFromRequest($request),
        );

        return new ReplySupportResource($reply);
    }

    public function destroy(string $id)
    {
        $this->replyService->delete($id);

        return response()->json(['message' => 'Deleted'], 204);
    }
}
