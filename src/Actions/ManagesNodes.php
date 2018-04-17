<?php

namespace Fruitbytes\Pterodactyl\Actions;

use Fruitbytes\Pterodactyl\Resources\Node;

trait ManagesNodes
{
    /**
     * Get a node instance.
     *
     * @param  string $nodeId
     * @return Node
     */
    public function node($nodeId)
    {
        return new Node($this->get("nodes/$nodeId")['node'], $this);
    }

}