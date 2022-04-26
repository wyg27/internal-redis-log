<?php
namespace SteerWalRedisLog;

/**
 * 测试
 */
class SteerWalRedisLog
{
    protected string $channel_id;

    public function __construct(string $channel_id)
    {
        $this->channel_id = trim($channel_id);
    }

    /**
     * @return string
     */
    public function getChannelId(): string
    {
        return $this->channel_id;
    }
}