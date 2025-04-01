<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Device extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
			"id" => $this->id,
			"name" => $this->name,
			"port" => $this->port,
			"baudrate" => $this->baudrate,
			"databits" => $this->databits,
			"stopbits" => $this->stopbits,
			"parity" => $this->parity,
			"inputlen" => $this->inputlen,
			"threshold" => $this->threshold,
			"delimiter" => $this->delimiter,
			"index" => $this->index,
			"status" => $this->status,
			"remark" => $this->remark,
			"log" => $this->log,
			"created_at" => $this->created_at,
			"updated_at" => $this->updated_at,
			"deleted_at" => $this->deleted_at,
			"created_by" => $this->created_by,
			"updated_by" => $this->updated_by,
			"deleted_by" => $this->deleted_by,

        ];
    }
}
