<?php
require_once("Model.php");

class SnackOrder extends Model {

    protected static string $table = "snack_orders";

    protected ?int $id = null;
    protected int $ticket_id;
    protected int $snack_id;
    protected int $quantity;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->ticket_id = $data['ticket_id'];
        $this->snack_id = $data['snack_id'];
        $this->quantity = $data['quantity'];
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTicketId(): int {
        return $this->ticket_id;
    }

    public function getSnackId(): int {
        return $this->snack_id;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function setTicketId(int $ticket_id): void {
        $this->ticket_id = $ticket_id;
    }

    public function setSnackId(int $snack_id): void {
        $this->snack_id = $snack_id;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'ticket_id' => $this->ticket_id,
            'snack_id' => $this->snack_id,
            'quantity' => $this->quantity
        ];
    }
}