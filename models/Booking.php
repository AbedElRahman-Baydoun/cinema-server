<?php
require_once("Model.php");

class Booking extends Model {

    protected static string $table = "bookings";

    protected ?int $id = null;
    protected int $user_id;
    protected int $showtime_id;
    protected ?string $created_at = null;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->user_id = $data['user_id'];
        $this->showtime_id = $data['showtime_id'];
        $this->created_at = $data['created_at'] ?? null;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getUserId(): int {
        return $this->user_id;
    }

    public function getShowtimeId(): int {
        return $this->showtime_id;
    }

    public function getCreatedAt(): ?string {
        return $this->created_at;
    }

    public function setUserId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setShowtimeId(int $showtime_id): void {
        $this->showtime_id = $showtime_id;
    }

    public function setCreatedAt(?string $created_at): void {
        $this->created_at = $created_at;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'showtime_id' => $this->showtime_id,
            'created_at' => $this->created_at
        ];
    }
}