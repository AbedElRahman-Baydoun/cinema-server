<?php
require_once("Model.php");

class PaymentMethod extends Model {

    protected static string $table = "payment_methods";

    protected ?int $id = null;
    protected int $user_id;
    protected string $card_holder_name;
    protected string $masked_card_number;
    protected int $expiration_month;
    protected int $expiration_year;
    protected string $card_type;
    protected bool $is_default;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->user_id = $data['user_id'];
        $this->card_holder_name = $data['card_holder_name'];
        $this->masked_card_number = $data['masked_card_number'];
        $this->expiration_month = $data['expiration_month'];
        $this->expiration_year = $data['expiration_year'];
        $this->card_type = $data['card_type'] ?? 'Visa';
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : false;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public function getCardHolderName(): string {
        return $this->card_holder_name;
    }

    public function getMaskedCardNumber(): string {
        return $this->masked_card_number;
    }

    public function getExpirationMonth(): int {
        return $this->expiration_month;
    }

    public function getExpirationYear(): int {
        return $this->expiration_year;
    }

    public function getCardType(): string {
        return $this->card_type;
    }

    public function isDefault(): bool {
        return $this->is_default;
    }

    public function setUserId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setCardHolderName(string $name): void {
        $this->card_holder_name = $name;
    }

    public function setMaskedCardNumber(string $number): void {
        $this->masked_card_number = $number;
    }

    public function setExpirationMonth(int $month): void {
        $this->expiration_month = $month;
    }

    public function setExpirationYear(int $year): void {
        $this->expiration_year = $year;
    }

    public function setCardType(string $type): void {
        $this->card_type = $type;
    }

    public function setIsDefault(bool $is_default): void {
        $this->is_default = $is_default;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'card_holder_name' => $this->card_holder_name,
            'masked_card_number' => $this->masked_card_number,
            'expiration_month' => $this->expiration_month,
            'expiration_year' => $this->expiration_year,
            'card_type' => $this->card_type,
            'is_default' => $this->is_default
        ];
    }
}
