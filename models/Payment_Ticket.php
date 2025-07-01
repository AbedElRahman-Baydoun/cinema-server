<?php
require_once("Model.php");

class PaymentTicket extends Model {

    protected static string $table = "payment_tickets";

    protected ?int $id = null;
    protected int $payment_id;
    protected int $ticket_id;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->payment_id = $data['payment_id'];
        $this->ticket_id = $data['ticket_id'];
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getPaymentId(): int {
        return $this->payment_id;
    }

    public function getTicketId(): int {
        return $this->ticket_id;
    }

    public function setPaymentId(int $payment_id): void {
        $this->payment_id = $payment_id;
    }

    public function setTicketId(int $ticket_id): void {
        $this->ticket_id = $ticket_id;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'payment_id' => $this->payment_id,
            'ticket_id' => $this->ticket_id
        ];
    }
}