<?php
require_once("Model.php");

class Payment extends Model {

    protected static string $table = "payments";

    protected ?int $id = null;
    protected int $user_id;
    protected int $payment_method_id;
    protected float $amount;
    protected string $status;
    protected ?string $paid_at = null;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->user_id = $data['user_id'];
        $this->payment_method_id = $data['payment_method_id'];
        $this->amount = (float)($data['amount'] ?? 0);
        $this->status = $data['status'] ?? 'pending';
        $this->paid_at = $data['paid_at'] ?? null;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public function getPaymentMethodId(): int {
        return $this->payment_method_id;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getPaidAt(): ?string {
        return $this->paid_at;
    }

    public function setUserId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setPaymentMethodId(int $payment_method_id): void {
        $this->payment_method_id = $payment_method_id;
    }

    public function setAmount(float $amount): void {
        $this->amount = $amount;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function setPaidAt(?string $paid_at): void {
        $this->paid_at = $paid_at;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'payment_method_id' => $this->payment_method_id,
            'amount' => $this->amount,
            'status' => $this->status,
            'paid_at' => $this->paid_at
        ];
    }
}