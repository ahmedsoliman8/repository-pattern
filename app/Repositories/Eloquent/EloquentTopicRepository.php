<?php

namespace App\Repositories\Eloquent;

use App\Models\Topic;
use App\Repositories\Contracts\TopicRepository;
use App\Repositories\RepositoryAbstract;

class  EloquentTopicRepository extends RepositoryAbstract implements TopicRepository
{
    public function entity()
    {
        return Topic::class;
    }

    public function allLive()
    {
        return $this->entity->where('live', true)->get();
    }

    public function allLiveLatest()
    {
        return $this->entity->where('live', true)->latest()->get();
    }

    public function allLiveLatestPaginate($perPage=10)
    {
        return $this->entity->where('live', true)->latest()->get();
    }
}
